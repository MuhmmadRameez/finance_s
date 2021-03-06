<?php 
	class Integration extends CI_Controller
	{
		public function index()
		{
			$this->load->view('front_end/header');
			$this->load->view('front_end/integration');
			$this->load->view('front_end/footer');
		}
	}
?>