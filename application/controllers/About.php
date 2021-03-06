<?php 
	class About extends CI_Controller
	{
		public function index()
		{
			$this->load->view('front_end/header');
			$this->load->view('front_end/about');
			$this->load->view('front_end/footer');
		}
	}
?>