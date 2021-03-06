<?php 
	class Forget_password extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Forget_password_model');
		}
		public function index()
		{
			$this->load->view('user/forget_password');
		}

		public function check_user()
		{
			$email = $this->input->post('email');
			$this->Forget_password_model->check_user($email);
		}		
	}
?>