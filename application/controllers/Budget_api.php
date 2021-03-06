<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget_api extends CI_Controller {

 function index()
 {
  $this->load->view('api_view');
 }
/*Account verification start after signup*/ 
 function action()
 {

/*Saving Plan API*/
   if($data_action == "money_in_save")
   {
    /*$api_url = "http://finance.xavishop.com/index.php/Financial_goal/save_saving_plan";*/
    $api_url ="https://xavishop.com/financial_app/index.php/Budget/money_in_save"
    $form_data = array(

    					'user_id' 			=>$this->input->post('id'),
						'paycheck' 			=>$this->input->post('paycheck'),
						'additional_income' =>$this->input->post('additional_amount'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }



    if($data_action == "money_out_save")
   {
    /*$api_url = "http://finance.xavishop.com/index.php/Financial_goal/save_car_purchasing";*/
    $api_url ="https://xavishop.com/financial_app/index.php/Budget/money_out_save"
    $form_data = array(

          				'user_id' 			=>$this->input->post('id'),
						'groceries' 			=>$this->input->post('groceries'),
						'transpotation' =>$this->input->post('transpotation'),
						'utilities' =>$this->input->post('utilities'),
						'dining_traveling' =>$this->input->post('dining_traveling'),
						'education' =>$this->input->post('education'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }


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


 


