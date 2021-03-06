<?php 
	class User_pannel extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('id')=="") 
			{
				return redirect('Login/');
			}
		}
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/nav');
			$this->load->view('user_profile/user_profile');
			$this->load->view('layout/footer');

			
		}
	}
?>