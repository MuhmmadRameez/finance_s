<?php 
	class Contact extends CI_Controller
	{
		public function index()
		{
			$this->load->view('front_end/header');
			$this->load->view('front_end/contact');
			$this->load->view('front_end/footer');
		}
	}
?>