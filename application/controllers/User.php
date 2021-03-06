<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'vendor/autoload.php'; // Loads the library

use Twilio\Rest\Client;
class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Basic_profile_model');
		$this->load->library('form_validation');
	}

	function index()
	{
		 $this->load->view('front_end/header');
		 $this->load->view('front_end/account');
		 $this->load->view('front_end/footer');
	}

	public function insert()
	{
		
			
			$contact =  $this->input->post('phone');
			$email = 	$this->input->post('email');
			$this->db->select('fs_signup.email');
			$this->db->where('fs_signup.email',$email);
			$query = $this->db->get('fs_signup');
			if ($query->num_rows()>0) 
			{
				$this->session->set_flashdata('error_msg','Email already exsist');
				redirect('User/');
			}
			else
			{
			$data = array(
				'first_name'	=>	 $this->input->post('first_name'),
				'last_name'		=>	$this->input->post('last_name'),
				'email'					=>	$email,
				'phone'				  =>	$contact,
				'password'			   => md5($this->input->post('password')),	
				'ip'				   =>$_SERVER['REMOTE_ADDR'],
				'created_at'		   =>  date("Y-m-d H:i:s"),
				'account_creation_date'=>date('Y-m-d'),
			);
			
		
			$this->User_model->insert_api($data);
		
			/*die($this->db->last_query());*/
			$id = $this->db->insert_id();
			 $this->send_sms($id);	
			 $this->send_otp_email($email);
			$array = array(
				'success'		=>	true,
			); 
			$record = $this->singup_user_detail($id);
		
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
				'verification_code'=>$fourRandomDigit,
			);
			$this->db->where('id',$user_id);
			$this->db->update('fs_signup',$array);
			redirect('User/account_verify/'.$user_id);
			return $fourRandomDigit;
			/*print $message->sid;	*/		
	}

	public function send_otp_email($email)
	{
		
		$config = array(
		  		'protocol' => 'smtp',
		  		'smtp_host' => 'ssl://smtp.googlemail.com',
		  		'smtp_port' => 465,
		  		'smtp_user' => 'muhammadrameez135@gmail.com', // change it to yours
		  		'smtp_pass' => '03312191682', // change it to yours
		  		'mailtype' => 'html',
		  		'charset' => 'iso-8859-1',
		  		'wordwrap' => TRUE
			);
 
			$message = 	"
						<html>
						<head>
							<title>Verification Code</title>
						</head>
						<body>
							<h2>Thank you for Registering.</h2>
							<p>Your Account:</p>
							<p>Email: ".$email."</p>
							<p>Please click the link below to activate your account.</p>
						</body>
						</html>
						";
 
		    $this->load->library('email', $config);
		    $this->email->set_newline("\r\n");
		    $this->email->from($config['smtp_user']);
		    $this->email->to("rameezyousuf135@gmail.com");
		    $this->email->subject('Signup Verification Email');
		    $this->email->message($message);
			$sending_email = $this->email->send();
			if ($sending_email) 
			{
				echo "Email sent";exit();
			}
		    //sending email
		    if($this->email->send()){
		    	$this->session->set_flashdata('message','Activation code sent to email');
		    }
		    else{
		    	$this->session->set_flashdata('message', $this->email->print_debugger());
 
		    }
	}

	public function singup_user_detail($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('fs_signup')->result();
	}

	public function view_request()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('user/view_user_request');
		$this->load->view('layout/footer');
	}

	public function account_verify($id)
	{
		 $data['id']=$id;
		 $this->load->view('front_end/header');
		 $this->load->view('front_end/user_verification',$data);
		 $this->load->view('front_end/footer');
		

	}

	public function welcome_window($id)
	{
		$data['record']=$this->User_model->get_info($id);
		$this->load->view('user/welcome_message',$data);
	}

	public function number_verification()
 	{
  	$id = $this->input->post('id');
  	$code = $this->input->post('code');
  	$update =  $this->User_model->update_api();
   if ($this->db->affected_rows()>0) 
   {
       $data = array(
                    'id'=> $id,
                );
    	 redirect('Dashboard/');
   }
  	else
  	{
  		$this->session->set_flashdata('error_message','Invlaid Code..');
  		$this->account_verify($id);
  		 
  	}
  }

    public function get_user_verification_status($id)
   {
   	$this->db->select('fs_signup.is_approved');
   	$this->db->where('id',$id);
   	return $this->db->get('fs_signup')->result();
   }

   public function fetch_user_code($id)
   {
   	$this->db->select('verification_code,is_approved');
   	$this->db->where('id',$id);
   	$this->db->where('is_approved',0);
   $query =  $this->db->get('fs_signup');
   if ($query->num_rows()>0) 
   {
   	$result = $query->result();
   	echo json_encode($result);
   }
   else
   {
   	echo json_encode("account already approved or invalid id");
   }
   
   }


  public function update_verification_status($user_id,$verification_code,$verification_status)
  {
  	$this->User_model->update_verification_status($user_id,$verification_code,$verification_status);
  }


	public function after_verification_message($user_id)
	{
			$sid = "AC7a534b6d3c715585fbbd895edad703c4"; // Your Account SID from www.twilio.com/console
			$token = "b6ed5b508700914ea1b2aba0ffab89cf"; // Your Auth Token from www.twilio.com/console
			$client = new Twilio\Rest\Client($sid, $token);
			$this->db->where('id',$user_id);
			$query = $this->db->get("fs_signup")->row_array();
			$message = $client->messages->create(
			  '+923312191682', // Text this number
			  [
			    'from' => '+18289444389', // From a valid Twilio number
			    'body' => ' Dear Mr '.$query['first_name'].' your demo account activated from '.$query['account_creation_date'].' for 10 days',
			  ]
			);	
	}

	function check_email_avalibility()  
      {  
           if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  
           {  
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
           }  
           else  
           {  
               
                if($this->User_model->is_email_available($_POST["email"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already User</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';  
                }  
           }  
      }

      public function user_profile()
      {
      	$user_id = $_SESSION['id'];
		$data['signup_record']=$this->User_model->get_user_details($user_id);
		$data['basic_profile']=$this->Basic_profile_model->fetch_basic_profile($user_id);
		$data['financial_profile']=$this->Basic_profile_model->fetch_financial_profile($user_id);
		$data['account_pay_able']=$this->Basic_profile_model->fetch_account_payable($user_id);
		$data['saving']=$this->Basic_profile_model->fetch_saving($user_id);
		$data['investment']=$this->Basic_profile_model->investment($user_id);
		$data['auto_loan']=$this->Basic_profile_model->fetch_auto_loan($user_id);
		$data['credit_card']=$this->Basic_profile_model->fetch_credit_card($user_id);
		$data['cust_loan']=$this->Basic_profile_model->fetch_customer_loan($user_id);
		$data['real_estate']=$this->Basic_profile_model->fetch_real_estate($user_id);
		$data['student_loan']=$this->Basic_profile_model->fetch_student_loan($user_id);
		$data['unpaid_tax']=$this->Basic_profile_model->fetch_unpaid_tax($user_id);
		$data['others']=$this->Basic_profile_model->fetch_others($user_id);

		if (!empty($data['basic_profile']) && !empty($data['financial_profile']) && !empty($data['account_pay_able'])  && !empty($data['saving'])  && !empty($data['investment']) && !empty($data['auto_loan']) && !empty($data['credit_card']) && !empty($data['cust_loan'])&& !empty($data['real_estate']) && !empty($data['student_loan']) && !empty($data['unpaid_tax']) && !empty($data['others'])) 
		{
			$this->load->view('layout/header');
	      	$this->load->view('layout/nav');
	      	$this->load->view('user/profile_page',$data);
	      	$this->load->view('layout/footer');
		}

		else
		{
			return redirect('User_profile/');
		}
      	
      } 

      public function message()
      {
      	$this->load->view('layout/header');
      	$this->load->view('layout/nav');
      	$this->load->view('user/message');
      	$this->load->view('layout/footer');
      }

      public function update_user_account()
      {
      	$this->User_model->update_user_account();
      }



}
