<?php 
	class Calculator extends CI_Controller
	{
		public function index()
		{
			$this->load->view('layout/header');
			$this->load->view('layout/nav');
			$this->load->view('calculator/mortgage_calculator');
			$this->load->view('layout/footer');

		}

		public function calculate_mortgate()
		{
			print_r($_POST);exit();
			$purchase_price = $this->input->post('purchase');
			$deposit = $this->input->post('deposit');
			$intrest_rate = $this->input->post('intrest_rate');
			$mortgage_length = $this->input->post('mortgageloan_amount');
			$loan_amount = $this->input->post('loan_amount');
			$payment_with_princple = $this->input->post('principle');
		}
	}
?>