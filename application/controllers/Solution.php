<?php 
	class Solution extends CI_Controller
	{
		public function index()
		{
			$this->load->view('front_end/header');
			$this->load->view('front_end/solution');
			$this->load->view('front_end/footer');
		}
	}
?>