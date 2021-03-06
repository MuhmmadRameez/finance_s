<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'vendor/autoload.php'; // Loads the library

use Twilio\Rest\Client;
  class Login extends CI_Controller
  {
    public function __construct()
  {
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
            $this->send_sms($data['id']); 
            
      }
      else {
            redirect("Login/");
      }
    }

  }
    public function send_sms($user_id)
  {
       $fourRandomDigit = rand(1000,9999);
      $sid = "AC7a534b6d3c715585fbbd895edad703c4"; // Your Account SID from www.twilio.com/console
      $token = "b6ed5b508700914ea1b2aba0ffab89cf"; // Your Auth Token from www.twilio.com/console

      $client = new Twilio\Rest\Client($sid, $token);
      $message = $client->messages->create(
        '+923312191682', // Text this number
        [
          'from' => '+18289444389', // From a valid Twilio number
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
      return redirect('Login/opt_verify/'.$user_id);
      print $message->sid;      
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
  public function verify_otp()
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

  }

  public function logout()
  {
    $this->session->sess_destroy();
   redirect('User_pannel', 'refresh');
  }
