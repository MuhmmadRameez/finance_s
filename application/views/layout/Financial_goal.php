<?php 
class Financial_goal extends CI_Controller
{
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('financial_goal/financial_goal');
		$this->load->view('layout/footer');
	}
}
?>