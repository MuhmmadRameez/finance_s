<?php 
	class Manage_user_model extends CI_Model
	{
		public function get_approved_user()
		{
			$this->db->select('fs_signup.id , fs_signup.first_name,fs_signup.last_name,fs_signup.email,fs_signup.phone,fs_signup.account_creation_date');
			$this->db->where('fs_signup.is_approved',0);
			return $this->db->get('fs_signup')->result();
		}
	}
?>