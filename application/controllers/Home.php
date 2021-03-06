<?php 
	class Home extends CI_Controller
	{
		public function index()
		{
			$this->load->view('front_end/header');
			$this->load->view('front_end/section');
			$this->load->view('front_end/footer');
		}
	}
?>