<?php 
	class Budget extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Budget_model');
		}
		public function index()
		{
			$data['money_in'] = $this->Budget_model->fetch_money_in_save();
			$data['fetch_money_out'] = $this->Budget_model->fetch_money_out();
			
			$this->load->view('layout/header');
			$this->load->view('layout/nav');
			$this->load->view('budget/budget',$data);
			$this->load->view('layout/footer');
		}

		public function money_in()
		{
			$data['money_in']=$this->Budget_model->get_money_in();	
			$this->load->view('layout/header');
			$this->load->view('layout/nav');
			$this->load->view('budget/money_in',$data);
			$this->load->view('layout/footer');	
		}

		public function money_in_save()
		{
			$this->Budget_model->money_in_save();
		}

		public function money_out()
		{
			
			$this->load->view('layout/header');
			$this->load->view('layout/nav');
			$this->load->view('budget/money_out');
			$this->load->view('layout/footer');	
		}

		public function money_out_save()
		{
			$this->Budget_model->money_out_save();
		}

		public function fetch_money_in()
		{
			$id = $_SESSION['id'];
			$data['money_in'] = $this->Budget_model->fetch_money_in_save($id);
			echo json_encode($data);
		}

		public function fetch_money_spend()
		{
			$id = $_SESSION['id'];
			$data['money_out'] = $this->Budget_model->fetch_money_out($id);
			echo json_encode($data);
		}


	}
?>
