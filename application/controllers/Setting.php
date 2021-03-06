<?php 
	class Setting extends CI_Controller
	{
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/nav');
			$this->load->view('setting/setting');
			$this->load->view('layout/footer');
		}
	}
?>