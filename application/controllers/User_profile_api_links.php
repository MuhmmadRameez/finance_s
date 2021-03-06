<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_profile_api_links extends CI_Controller {

 function index()
 {
  $this->load->view('api_view');
 }
/*Account verification start after signup*/ 
 function action()
 {

/*basic profile insertion*/
   if($data_action == "insert_basic")
   {
    $api_url = "http://finance.xavishop.com/index.php/User_profile/insert_basic";
    $form_data = array(

    	'user_id'     =>$this->input->post('id'),
        'first_name'     =>$this->input->post('name'),
        'last_name'      =>$this->input->post('lastname'),
        'dob'        =>$this->input->post('dob'),
        'adress'       =>$this->input->post('adress'),
        'country'      =>$this->input->post('country'),
        'province'       =>$this->input->post('province'),
        'city'           =>$this->input->post('city'),
        'language'       =>$this->input->post('language'),
        'gender'       =>$this->input->post('gender'),
        'age'        =>$this->input->post('age'),
        'image'        =>$picture,
        'martial_status'   =>$this->input->post('martial'),
        'created_at'     =>date("Y-m-d H:i:s"),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }
/*basic profile insertion end*/
/*Spouce Details*/
if($data_action == "spouce")
   {
    $api_url = "localhost/finance_system/index.php/User_profile/add_spouce";
    $api_url = "https://finance.xavishop.com/index.php/User_profile/add_spouce";

    /*$api_url = "http://finance.xavishop.com/index.php/User/insert";*/
   
/*financial income start*/
    $form_data = array(
         'user_id'     =>$this->input->post('id'),
        'marriage_date' =>$this->input->post('marriage_date'),
        'spouce_name'   =>$this->input->post('spouce_name'),
        'children_name' =>$this->input->post('children_name'),
        'dob'           =>$this->input->post('date_of_birth'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;


   }
/*financial_income*/
/*if($data_action == "financial_income")
   {
    $api_url = "localhost/finance_system/index.php/User_profile/financial_income";
    $api_url = "https://finance.xavishop.com/index.php/User_profile/financial_income";
   $user_id =$this->input->post('user_id');
        $tax = $this->input->post('tax');
        $currency = $this->input->post('currency');
        $per = $this->input->post('per');
        $year_month=$this->input->post('monthly');
        foreach ($user_id as $key=>$id) 
            {
                    $form_data = array(
                        'user_id'=>$id,
                        'tax'=>$tax[$key],
                        'currency'=>$currency[$key],
                        'percentage'=>$per[$key],
                        'monthly_yearly'=>$year_month[$key],
                        'created_by'=>$id,
                        'created_at'=>date("Y-m-d H:i:s"),
                    );
                }       
            }
    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;*/
   }
/*financial_api_end*/
/*investment_profile*/




/*investment_profile_end*/
   /*Debits API*/

// account payable
if($data_action == "account_payable")
   {
    $api_url = "localhost/finance_system/index.php/User_profile/account_payable";
    $api_url = "https://finance.xavishop.com/index.php/User_profile/account_payable";
    $form_data = array(
                     'user_id'               =>$this->input->post('id'),
                    'account_currency'       =>$this->input->post('account_curruncy'),
                    'account_return_annum'   =>$this->input->post('rate_per_anum'),
                    'account_frequecncy'     =>$this->input->post('return_intrest'),
                    'account_minimum_percent'=>$this->input->post('minimum_payment'),
                    'created_at'             =>date('Y-m-d H:i:s'),
                    'created_by'             =>$this->input->post('id'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }

// auto loan
   if($data_action == "auto_loan")
   {
    $api_url = "localhost/finance_system/index.php/User_profile/auto_loan";
    $api_url = "https://finance.xavishop.com/index.php/User_profile/auto_loan";
    $form_data = array(
                   'user_id'                     =>$this->input->post('id'),
                    'auto_loan_liability'        =>$this->input->post('auto_loan_liability'),
                    'auto_loan_return_anum'      =>$this->input->post('auto_loan_rate_per_anum'),
                    'auto_loan_frequency'        =>$this->input->post('auto_loan_return_intrest'),
                    'auto_minimum_payment'       =>$this->input->post('auto_loan_minimum_payment'),
                    'created_at'                 =>date('Y-m-d H:i:s'),
                    'created_by'                 =>$this->input->post('id'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }
// credit debit
 if($data_action == "credit_debit")
   {
    $api_url = "localhost/finance_system/index.php/User_profile/credit_debit";
    $api_url = "https://finance.xavishop.com/index.php/User_profile/credit_debit";
    $form_data = array(
                  'user_id'                  =>$this->input->post('id'),
                    'credit_liability'           =>$this->input->post('debit_credit_liability'),
                    'credit_return_per_annum'    =>$this->input->post('debit_credit_rate_per_anum'),
                    'credit_frequency'           =>$this->input->post('debit_credit_return_intrest'),
                    'credit_minimum_payment'     =>$this->input->post('debit_credit_minimum_payment'),
                    'created_at'                 =>date('Y-m-d H:i:s'),
                    'created_by'                 =>$this->input->post('id'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }

// customer loan
    if($data_action == "customer_loan")
   {
    $api_url = "localhost/finance_system/index.php/User_profile/customer_loan";
    $api_url = "https://finance.xavishop.com/index.php/User_profile/customer_loan";
    $form_data = array(
                  'user_id'                  =>$this->input->post('id'),
                    'customer_liability'         =>$this->input->post('customer_loan_liability'),
                    'customer_frequency'         =>$this->input->post('customer_loan_rate_per_anum'),
                    'customer_return_per_annum'  =>$this->input->post('customer_loan_return_intrest'),
                    'customer_minimum_payment'   =>$this->input->post('customer_loan_minimum_payment'),
                    'created_at'                 =>date('Y-m-d H:i:s'),
                    'created_by'                 =>$this->input->post('id'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }


   // customer loan
    if($data_action == "student_loan")
   {
    $api_url = "localhost/finance_system/index.php/User_profile/student_loan";
    $api_url = "https://finance.xavishop.com/index.php/User_profile/student_loan";
    $form_data = array(
                 'user_id'                       =>$this->input->post('id'),
                    'student_liability'         =>$this->input->post('student_loan_liability'),
                    'student_return_per_annum'  =>$this->input->post('student_loan_rate_per_anum'),
                    'student_frequency'         =>$this->input->post('student_loan_return_intrest'),
                    'student_minimum_payment'   =>$this->input->post('student_loan_minimum_payment'),
                    'created_at'                =>date('Y-m-d H:i:s'),
                    'created_by'                =>$this->input->post('id'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }

     if($data_action == "unpaid_tax")
   {
    $api_url = "localhost/finance_system/index.php/User_profile/unpaid_tax";
    $api_url = "https://finance.xavishop.com/index.php/User_profile/unpaid_tax";
    $form_data = array(
                'user_id'                   =>$this->input->post('id'),
                    'unpaid_liability'          =>$this->input->post('unpaid_tax_liability'),
                    'unpaid_return_per_annum'   =>$this->input->post('unpaid_tax_rate_per_anum'),
                    'unpaid_frequency'          =>$this->input->post('unpaid_tax_return_intrest'),
                    'unpaid_minimum_payment'    =>$this->input->post('unpaid_tax_minimum_payment'),
                    'created_at'                =>date('Y-m-d H:i:s'),
                    'created_by'                =>$this->input->post('id'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }

        if($data_action == "other_liabilites")
   {
    $api_url = "localhost/finance_system/index.php/User_profile/other_liabilites";
    $api_url = "https://finance.xavishop.com/index.php/User_profile/other_liabilites";
    $form_data = array(
                    'user_id'                   =>$this->input->post('id'),
                    'other_liability'           =>$this->input->post('other_liabilities_liability'),
                    'other_return_per_annum'    =>$this->input->post('money_owed_rate_per_anum'),
                    'other_frequency'           =>$this->input->post('money_owed_return_intrest'),
                    'other_minimum_payment'     =>$this->input->post('money_owed_minimum_payment'),
                    'created_at'                =>date('Y-m-d H:i:s'),
                    'created_by'                =>$this->input->post('id'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }

  if($data_action == "real_state_mortgage")
   {
    $api_url = "localhost/finance_system/index.php/User_profile/real_state_mortgage";
    $api_url = "https://finance.xavishop.com/index.php/User_profile/real_state_mortgage";
    $form_data = array(
                   'user_id'                        =>$this->input->post('id'),
                    'real_estate_liability'         =>$this->input->post('real_estate_liability'),
                    'real_estate_eturn_per_annum'   =>$this->input->post('real_estate_rate_per_anum'),
                    'real_estate_frequency'         =>$this->input->post('real_estate_return_intrest'),
                    'real_estate_minimum_payment'   =>$this->input->post('real_estate_minimum_payment'),
                    'created_at'                    =>date('Y-m-d H:i:s'),
                    'created_by'                    =>$this->input->post('id'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }

     if($data_action == "financial_income")
   {
    $api_url = "localhost/finance_system/index.php/User_profile/financial_income";
    $api_url = "https://finance.xavishop.com/index.php/User_profile/financial_income";
    $form_data = array(
                'user_id'                   =>$this->input->post('id'),
                'salary_income'             =>$this->input->post('salary_income'),
                'rental_income'             =>$this->input->post('rental_income'),
                'commision_income'          =>$this->input->post('commision_income'),
                'other_income'              =>$this->input->post('other_income'),
                'dividends'                 =>$this->input->post('dividends'),
                'created_at'                =>date("Y-m-d H:i:s"),
    );

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
 
}

?>