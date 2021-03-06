<?php 
	class Manage_user extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Manage_user_model');
		}
		public function index()
		{
			$data['un_approve']=$this->Manage_user_model->get_approved_user();
			$this->load->view('admin/layout/header');
			$this->load->view('admin/layout/nav');
			$this->load->view('admin/manage_user/manage_user',$data);
			$this->load->view('admin/layout/footer');
		}
	}
?>