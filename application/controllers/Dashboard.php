<?php 
class Dashboard extends CI_Controller
{
	public function __construct()
		{
			parent::__construct();
			if ($_SESSION['id']=="") 
			{
				return redirect('Login/');
			}
			$this->load->model('User_model');
			$this->load->model('Basic_profile_model');
		}
	public function index()
	{
		$user_id = $_SESSION['id'];
		$data['financial_profile']=$this->Basic_profile_model->fetch_financial_profile($user_id);
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('layout/content',$data);
		$this->load->view('layout/footer');
	}
}
