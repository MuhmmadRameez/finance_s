<?php 
	class Financial_planner extends CI_Controller
	{
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/nav');
			$this->load->view('financial_planner/financial_planner');
			$this->load->view('layout/footer');
		}
	}
?>