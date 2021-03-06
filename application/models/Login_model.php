<?php 
	class Login_model extends CI_Model
	{
	function insert_api($data)
	{
		$this->db->insert('login_data', $data);
	}

	
	}
?>