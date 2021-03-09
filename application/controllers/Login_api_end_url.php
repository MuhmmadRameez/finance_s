<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_api_end_url extends CI_Controller {

 function index()
 {
  $this->load->view('api_view');
 }

 function action()
 {
  if($this->input->post('data_action'))
  {
   $data_action = $this->input->post('data_action');

   if($data_action == "Delete")
   {
    $api_url = "http://localhost/tutorial/codeigniter/api/delete";

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
/*Account verification start*/
   if($data_action == "Edit")
   {
    $api_url = "http://localhost/finance_s/index.php/Login/verify_otp";

    $form_data = array(
    $code =$this->input->post('code')
    $id   =$this->input->post('id'),
     'status'=>1,
    );
   

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;
   }

   /*Account verification end*/

   if($data_action == "fetch_single")
   {
    $api_url = "http://localhost/finance_system/index.php/Login/fetch_single";

    $form_data = array(
     'email'  => $this->input->post('email'),
     'password'  => md5($this->input->post('password')),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;

   }


   


    if($data_action == "number_check")
   {
    $api_url = "http://localhost/finance_system/index.php/Login/number_check";

    $form_data = array(
     'id'  => $this->input->post('id'),
     'phone'  => $this->input->post('number'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;

   }

   if($data_action == "Insert")
   {
    $api_url = "http://localhost/finance_system/index.php/User/insert";
   

    $form_data = array(
          'username'    =>  $this->input->post('username'),
          'email'       =>  $this->input->post('email'),
          'password'    =>  $this->input->post('password'),
          'contact'     =>    $this->input->post('contact'),
          'ip'          =>  $_SERVER['REMOTE_ADDR'],
          'created_at'  =>  date("Y-m-d H:i:s"),
         'account_creation_date'=>date('Y-m-d'),
    );

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_POST, true);

    curl_setopt($client, CURLOPT_POSTFIELDS, $form_data);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    echo $response;


   }






   if($data_action == "fetch_all")
   {
    $api_url = "http://localhost/tutorial/codeigniter/api";

    $client = curl_init($api_url);

    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);

    curl_close($client);

    $result = json_decode($response);

    $output = '';

    if(count($result) > 0)
    {
     foreach($result as $row)
     {
      $output .= '
      <tr>
       <td>'.$row->first_name.'</td>
       <td>'.$row->last_name.'</td>
       <td><butto type="button" name="edit" class="btn btn-warning btn-xs edit" id="'.$row->id.'">Edit</button></td>
       <td><button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row->id.'">Delete</button></td>
      </tr>

      ';
     }
    }
    else
    {
     $output .= '
     <tr>
      <td colspan="4" align="center">No Data Found</td>
     </tr>
     ';
    }

    echo $output;
   }
  }
 }
 
}

?>
