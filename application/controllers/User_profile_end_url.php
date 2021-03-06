<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_profile_end_url extends CI_Controller {

 function index()
 {
  $this->load->view('api_view');
 }
/*Account verification start after signup*/ 
 function action()
 {
  if($this->input->post('data_action'))
  {
   $data_action = $this->input->post('data_action');

   if($data_action == "edit")
   {
       /*$api_url = "http://finance.xavishop.com/index.php/User/number_verification";*/
       $api_url="localhost/finance_system/index.php/User/number_verification"

   $id   =$this->input->post('id');
    $verification_code =$this->input->post('code');
    $form_data = array(
      'is_approved'=>1,
    );
    $this->db->where('id', $id);
    $this->db->where('verification_code',$verification_code);
    $this->db->update('fs_signup',$array);
    

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }

   if($data_action == "edit")
   {
       /*$api_url = "http://finance.xavishop.com/index.php/User/number_verification";*/
       $api_url="localhost/finance_system/index.php/User/update_verification_status/verification_status"

   $id   =$this->input->post('id');
    $verification_code =$this->input->post('code');
    $form_data = array(
      'is_approved'=>1,
    );
    $this->db->where('id', $id);
    $this->db->where('verification_code',$verification_code);
    $this->db->update('fs_signup',$array);
    

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }

   if($data_action == "edit")
   {
       /*$api_url = "http://finance.xavishop.com/index.php/User/number_verification";*/
       $api_url="localhost/finance_system/index.php/User/fetch_user_code/"

    $id ;
      $this->db->select('verification_code,is_approved');
    $this->db->where('id',$id);
    $this->db->where('is_approved',0);
   $query =  $this->db->get('fs_signup');
   if ($query->num_rows()>0) 
   {
    $result = $query->result();
    echo json_encode($result);
   }
   else
   {
    echo json_encode("account already approved or invalid id");
   }
    $this->db->where('id', $id);
    $this->db->where('verification_code',$verification_code);
    $this->db->update('fs_signup',$array);
    

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }


    if($data_action == "edit")
   {
       /*$api_url = "http://finance.xavishop.com/index.php/User/number_verification";*/
       $api_url="localhost/finance_system/index.php/User/update_verification_status"

   $id   =$this->input->post('id');
    $verification_code =$this->input->post('code');
    $form_data = array(
      'is_approved'=>1,
    );
    $this->db->where('id', $id);
    $this->db->where('verification_code',$verification_code);
    $this->db->update('fs_signup',$array);
    

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }


/*Account verification start after signup*/ 

/*Login API LINK*/

   if($data_action == "fetch_single")
   {
    /*$api_url = "http://onlinefood.xavishop.com/finance_system/index.php/User/fetch_single";*/
    $api_url = "localhost/finance_system/index.php/User/fetch_single"

    $form_data = array(
     'id'  => $this->input->post('user_id')
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;

   }
/*Login API LINK*/

/*Signup*/
   if($data_action == "Insert")
   {
    $api_url = "localhost/finance_system/index.php/User/insert"

    /*$api_url = "http://finance.xavishop.com/index.php/User/insert";*/
   

    $form_data = array(
    		'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'password' => md5($this->input->post('password')),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;


   }
/*Signup ENd*/
  }
 }
 
}

?>