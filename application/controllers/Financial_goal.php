<?php 
class Financial_goal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Financial_goals_model');
	}
	public function index()
	{
		
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('financial_goal/financial_goal');
		$this->load->view('layout/footer');
	}

	public function saving_plan()
	{
		$id = $_SESSION['id'];
		$data['record'] = $this->Financial_goals_model->fetch_record($id);
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('financial_goal/saving_plan',$data);
		$this->load->view('layout/footer');	
	}
	public function save_saving_plan()
	{
		$this->Financial_goals_model->save_saving_plan($id);
	}
	public function fetch_saving_plan()
	{
	  $id = 1;
	  $data['record'] = $this->Financial_goals_model->fetch_record($id);	
	}
	public function house_plan()
	{
		$data['house_plan'] = $this->Financial_goals_model->fetch_house_plan();
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('financial_goal/house_plan',$data);
		$this->load->view('layout/footer');
	}

	public function save_house_plan()
	{
		$this->Financial_goals_model->save_home_plan();
	}

	public function update_home_plan()
	{
		$this->Financial_goals_model->update_home_plan();
	}

	public function investment_plan()
	{
		$data['invest_planner'] = $this->Financial_goals_model->fetch_investment_planner();
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('financial_goal/investment_planer',$data);
		$this->load->view('layout/footer');
	}

	public function save_investment_plan()
	{
		$this->Financial_goals_model->save_investment_plan();
	}

	public function carpurchase_wizard()
	{
		$data['car_investment'] = $this->Financial_goals_model->fetch_car_investment();
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('financial_goal/car_investment',$data);
		$this->load->view('layout/footer');
	}

	public function save_car_purchasing()
	{
		$this->Financial_goals_model->save_car_purchasing();
	}

	public function update_car_investment_plan()
	{
		$this->Financial_goals_model->update_car_investment_plan();
	}
	public function update_investment_plan()
	{
		$this->Financial_goals_model->update_investment_plan();
	}
}
?>