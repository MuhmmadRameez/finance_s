<?php 
	class View_user_request extends CI_Controller
	{
		public function index()
		{
			$this->load->view('admin/layout/header');
			$this->load->view('admin/layout//nav');
			$this->load->view('admin/user_request/view_user_request');
			$this->load->view('admin/layout/footer');
		}
	}
?>