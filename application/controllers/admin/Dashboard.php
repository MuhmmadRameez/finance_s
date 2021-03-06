<?php 
	class Dashboard extends CI_Controller
	{
		public function index()
		{
			$this->load->view('admin/layout/header');
			$this->load->view('admin/layout/nav');
			$this->load->view('admin/layout/content');
			$this->load->view('admin/layout/footer');
		}
	}
?>