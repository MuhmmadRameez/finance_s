<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'vendor/autoload.php'; // Loads the library

use Twilio\Rest\Client;
  class Login extends CI_Controller
  {
    public function __construct()
  {
      header('Access-Control-Allow-Origin: *');
      header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    parent::__construct();
    
    $this->load->library('form_validation');
    /*$this->load->library('Twilio');*/
    $this->load->library('email');

  }
    function index()
  {
 $this->load->view('user_login/login');
 }
 function fetch_single()
    {
    
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run())
    {
      $email =  $this->input->post('email');
      $password = md5($this->input->post('password'));
      $this->db->where('email',$email);
      $this->db->where('password',$password);


      $query = $this->db->get('fs_signup');
      $record = $query->row_array();
      if ($record['is_approved']=="0") {
      echo json_encode("account not approved");
      exit();

    }
      if (!empty($record))
      {
                $data = array(
                    'id'=> $record['id'],
                    'username'=> $record['first_name'],
                    'email'=> $record['last_name'],
                    'contact_number'=> $record['phone'],
                    'creation_date'=> $record['account_creation_date'],
                );

            $this->session->set_userdata($data);
            $this->check_days();
            $this->send_sms($data['id']); 
            
      }
      else {
        echo "error";
      }
    }

  }
  
   public function fetch_login_user_detail($login_id,$user_id)
  {
    $this->db->select('fs_signup.id , fs_signup.first_name , fs_signup.last_name , fs_signup.email,
      fs_signup.phone,login_data.login_otp,login_data.login_datetime,login_data.ip');
    $this->db->join('login_data','login_data.user_id = fs_signup.id');
    $this->db->where('login_data.login_id',$login_id);
    $this->db->where('login_data.user_id',$user_id);
    return $this->db->get('fs_signup')->result();
  }
  
   


  public function check_days()
  {
    $id =$this->session->userdata('id');
    $query = $this->db->get("fs_signup")->row_array();
    $creation_date = $query['account_creation_date'];
    date_default_timezone_set('Europe/Warsaw');
    $from = strtotime($creation_date);
    $today = time();
    $difference = $today - $from;
    $total_days = floor($difference / 86400);
    if ($total_days==10) 
    {
      $array = array(
        'is_expire'=>1,
        'expire_at'=>date("Y-m-d H:i:s"),
      );  
      $this->db->where('id',$id);
      $this->db->update('fs_signup',$array);
      if ($this->db->affected_rows()>0) 
      {
        echo "Your Account has beed expire";
      }
    }
  } 

  public function opt_verify($id)
  {
    $data['id']=$id;
    $this->load->view('login/login_opt',$data);
  }

  function number_verification()
  {
    $id = $this->input->post('id');
   $this->User_model->update_api();
   $this->after_verification_message($id);
   $array = array(
    'success'  => true
   );
   echo json_encode($array, true);
  }
  /*public function verify_otp()
  {
    $id   = $this->input->post('id');
    $code = $this->input->post('code');
   
    $this->db->where('user_id',$id);
    $this->db->where('login_otp',$code);
    $this->db->where('status',0);
    // $this->db->update('login_data',$array);
     $query =$this->db->get("login_data");
    
   
    if ($query->num_rows() > 0) 
    {

       $array = array(
      'status'=>1,
    );
      $this->db->where('user_id',$id);
    $this->db->where('login_otp',$code);
    $this->db->where('status',0);
     $this->db->update('login_data',$array);
      $row = $query->row_array();
      $user_id = $row['user_id']; 
   //   echo $user_id;
      redirect("Dashboard/");
      
    }
    else
    {
      echo "Invalid code";
    }

  }*/

  public function logout()
  {
    $this->session->sess_destroy();
   redirect('User_pannel', 'refresh');
  }
  
   function fetch_single()
    {
    
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run())
    {
      $email =  $this->input->post('email');
      $password = md5($this->input->post('password'));
      $this->db->where('email',$email);
      $this->db->where('password',$password);
   
      $query = $this->db->get('fs_signup'); 
      
      if ($query->num_rows()==1) 
      {
                $record = $query->row_array();
                $data = array(
                    'id'=> $record['id'],
                    'username'=> $record['first_name'],
                    'email'=> $record['last_name'],
                    'contact_number'=> $record['phone'],
                    'creation_date'=> $record['account_creation_date'],
                );

            $this->session->set_userdata($data);
            $this->check_days();
           /* $this->send_sms($data['id']); */
           redirect('Login/number_verify/'.$data['id']);
            
      }
      else {
            redirect("Login/");
      }
    }

  }
    public function send_sms($user_id)
  {
       $fourRandomDigit = rand(1000,9999);
      $sid = "AC77bd1f18a986fbd6eb71709b0b15bc6f"; // Your Account SID from www.twilio.com/console
      $token = "32052aeb8fb4eeda6bc60e1f565d7082"; // Your Auth Token from www.twilio.com/console

      $client = new Twilio\Rest\Client($sid, $token);
      $message = $client->messages->create(
        '+923099874693', // Text this number
        [
          'from' => '+15854494140', // From a valid Twilio number
          'body' => $fourRandomDigit
        ]
      );
      $array = array(
        'user_id'=>$user_id,
        'login_otp'=>$fourRandomDigit,
        'last_activity'=>date('Y-m-d'),
        'login_datetime'=>date("Y-m-d H:i:s"),
        'ip' =>$_SERVER['REMOTE_ADDR'],
      );
      $this->db->insert('login_data',$array);
      $login_id = $this->db->insert_id();
      $data = $this->fetch_login_user_detail($login_id,$user_id);
      if ($data>0) 
      {
          echo  json_encode($data);
          /*redirect("Login/opt_verify/".$user_id);*/
      }
      else
      {
        echo json_encode("invalid user");
      }
      /*return redirect('Login/number_verify/'.$user_id);*/
      /*print $message->sid;    */  
  }

 /*open after login before verification*/
  public function number_verify($id)
  {
    $data['user_id']=$id;
    $this->load->view('login/number_check',$data);
  }
  /*open after login before verification*/

  public function number_check()
  {
    $id     = $this->input->post('id');
    $number = $this->input->post('number');
    $this->db->select('fs_signup.phone');
    $this->db->where('id',$id);
    $this->db->where('phone',$number);
    $query = $this->db->get('fs_signup');
    /*die($this->db->last_query());*/
    if ($query->num_rows()>0) 
    {
      $this->send_sms($id);
    }
    else
    {
      echo json_encode("Record not found");
    }
  }
}
?>
