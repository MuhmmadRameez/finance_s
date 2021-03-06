<?php 
	class Forget_password_model extends CI_Model
	{
		public function check_user($email)
		{
			$this->db->where('email',$email);
			$query = $this->db->get('fs_signup');
			if ($query->num_rows()>0) 
			{
				$result = $query->result();
				$user_id = $result[0]->id;
				redirect('user/number_check');
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
			return $fourRandomDigit;
			redirect('User/account_verify/'.$user_id);
			/*print $message->sid;	*/		
	}


}
	
?>