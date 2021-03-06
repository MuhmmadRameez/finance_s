<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Financial_goals_end_url extends CI_Controller {

 function index()
 {
  $this->load->view('api_view');
 }
/*Account verification start after signup*/ 
 function action()
 {

/*Saving Plan API*/
   if($data_action == "save_saving_plan")
   {
    /*$api_url = "http://finance.xavishop.com/index.php/Financial_goal/save_saving_plan";*/
    $api_url ="https://xavishop.com/financial_app/index.php/Financial_goal/save_saving_plan"
    $form_data = array(

    				'user_id'					=>$this->input->post('id'),
					'saving_goal'				=>$this->input->post('saving_goals'),
					'period'					=>$this->input->post('peroid'),
					'per_period_amount_to_saved'=>$this->input->post('saved'),
					'period_type'				=>$this->input->post('period_type'),
					'created_at'				=>date('Y-m-d'),
					'created_by'				=>$this->input->post('id'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }


/*Fetch saving plans*/
 if($data_action == "fetch_single")
   {
    $api_url = "http://localhost/finance_system/index.php/Financial_goal/fetch_saving_plan";
    $user_id =$_SESSION['id'];
    $form_data = array(
     'user_id'=>$user_id;
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;

   }

/*Fetch saving plans*/
    if($data_action == "save_car_purchasing")
   {
    /*$api_url = "http://finance.xavishop.com/index.php/Financial_goal/save_car_purchasing";*/
    $api_url ="https://xavishop.com/financial_app/index.php/Financial_goal/save_car_purchasing"
    $form_data = array(

            'user_id'           =>$this->input->post('user_id'),
            'per_period_contribution'   =>$this->input->post('contribution'),
            'periods'           =>$this->input->post('period'),
            'intrest_rate_on_investment'  =>$this->input->post('intrsest'),
            'value_of_investment'     =>$this->input->post('investment'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }
   /*Update car saving plan start*/
   if($data_action == "edit")
   {
    $api_url = "http://localhost/finance_system/index.php/Financial_goal/update_car_investment_plan"
    $id =  $this->input->post('id');
    $form_data = array(
                      
                    'loan_amount'        =>$this->input->post('loan'),
                    'annula_intrest_rate'=>$this->input->post('anual'),
                    'loan_term'          =>$this->input->post('term'),
                    'payment_frequency'  =>$this->input->post('frequency'),
                    'resedual_value'     =>$this->input->post('value'),
    );
            $this->db->where('id',$id);
            $this->db->update('fs_car_saving',$form_data);
            die($this->db->last_query());

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }
   /*update car saving plan end*/


    if($data_action == "save_investment_plan")
   {
    /*$api_url = "http://finance.xavishop.com/index.php/Financial_goal/save_saving_plan";*/
    $api_url ="https://xavishop.com/financial_app/index.php/Financial_goal/save_investment_plan"
    $form_data = array(

            'user_id'=>$this->input->post('user_id'),
            'loan_amount'=>$this->input->post('loan'),
            'anual_intrest'=>$this->input->post('anual'),
            'loan_terms'=> $this->input->post('term'),
            'payment_frequency'=>$this->input->post('frequency'),
            'resedual_value'=>$this->input->post('value'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }
   /*house goal*/
   if($data_action == "save_house_plan")
   {
    /*$api_url = "http://finance.xavishop.com/index.php/Financial_goal/save_saving_plan";*/
    $api_url ="https://xavishop.com/financial_app/index.php/Financial_goal/save_house_plan"
    $form_data = array(

    				'user_id'			 =>$this->input->post('id'),
					'loan_amount'		 =>$this->input->post('loan_amount'),
					'deposit'			 =>$this->input->post('deposit'),
					'annual_intrest_rate'=>$this->input->post('annual_intrest'),
					'loan_term'			 =>$this->input->post('loan_term'),
					'payment_frequency'  =>$this->input->post('payment_frequency'),
					'created_at'		 =>date('Y-m-d'),
					'created_by'		 =>$this->input->post('id'),

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }

   }
  }


 


