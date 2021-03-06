<?php 
	class User_profile_model extends CI_Model
	{
		public function insert()
	{
			$data = array(
				'first_name'	=>	$this->input->post('firstname'),
				'last_name'		=>	$this->input->post('lastname'),
				'email'					=>	$email,
				'phone'				  =>	$contact,
				'password'			   => $password,	
				'id'				   =>$_SERVER['REMOTE_ADDR'],
				'created_at'		   =>  date("Y-m-d H:i:s"),
				'account_creation_date'=>date('Y-m-d'),
			);
			

			$this->User_model->insert_api($data);
			$id = $this->db->insert_id();
			$query = $this->send_sms($id);	
			$email = $this->send_otp_email($email);
			$array = array(
				'success'		=>	true,
			); 
		echo json_encode($array);
	}
	}
?>