<?php 
	class Pricing extends CI_Controller
	{
		public function index()
		{
			$this->load->view('front_end/header');
			$this->load->view('front_end/pricing');
			$this->load->view('front_end/footer');
		}
	}
?>