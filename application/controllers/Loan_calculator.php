<?php 
	class Loan_calculator extends CI_Controller
	{
		public function index()
		{
			$this->load->view("loan_calculator/loan_calculator");
		}
		public function calculation()
		{
			 $data['months'] = array(
                '1' => 'January',
                '2' => 'Febrary',
                '3' => 'March',
                '4' => 'April',
                '5' => 'May',
                '6' => 'June',
                '7' => 'July',
                '8' => 'August',
                '9' => 'September',
                '10' => 'October',
                '11' => 'November',
                '12' =>'December',
            );
			/*print_r($_POST);exit();*/
			$prinipal	= $this->input->post('prinipal');
			$downpayment= $this->input->post('down_payment');
			$off_year= $this->input->post('off_year');
			$installmen_frequency= $this->input->post('installmen_frequency');
			$intrest_per_period= $this->input->post('intrest_per_period');
			$remaining_amount = $prinipal - $downpayment;
			$get_months = $off_year*12;
			$payment_per_month = $remaining_amount/$get_months;
			$intrest_per_period = $remaining_amount/$prinipal*$get_months;
			
			$data['remaining_amount']=$remaining_amount;
			$data['years']=$get_months;
			$data['off_year']=$off_year;
			$data['payment_per_month']=$payment_per_month;
			$data['intrest_per_period']=$intrest_per_period;
			$this->load->view("loan_calculator/loan_calculator",$data);
		}
	}
?>