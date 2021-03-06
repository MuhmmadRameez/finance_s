<?php 
class Transaction extends CI_Controller
{

public function index()
{
	$this->load->view('transaction');
}
public function request()
{
$plaid_env = 'sandbox';
  $plaid_client_id = "[[YOUR PLAID CLIENT ID]]";
  $plaid_public = "[[YOUR PLAID PUBLIC KEY]]";
  $plaid_secret = "[[YOUR PLAID SECRET]]";
  $plaid_url = "https://sandbox.plaid.com";
$error="";
if(!empty($_POST))  
{   
  if (isset($_POST['id'])){//This is our customer ID
    if((isset($_POST['pt']))&&(isset($_POST['md']))){
      $customer_id = $_POST['id'];
      $metadata = $_POST['md'];
      //Exchange public token for Plaid access_token
      $plaid_token = get_plaid_token($_POST['pt']);
      //---------------------------------------------------------------------------Save your tokens and IDs                   
      //Plaid Access Token
      saveCustomerToken($customer_id, "Plaid Access Token", $plaid_token["access_token"]);      
      //Item ID
      saveCustomerToken($customer_id, "Item ID", $plaid_token['item_id']);  
        //Institution ID
      saveCustomerToken($customer_id, "Institution ID", $metadata['institution']['institution_id']);
      //Institution Name
      saveCustomerToken($customer_id, "Institution Name", $metadata['institution']['name']);
      //Chosen Bank Account ID
      saveCustomerToken($customer_id, "Bank Selection Token", $metadata['account_id']);
      echo "Success";//The message Javascript code will look for
    }else{
      echo "Failed: Plaid Link Data Missing";      
      error_log("Banking Authentication Failed. Plaid Link Data Missing for " . $customer_id);
    }
  }else error_log("Banking Authentication Failed. Customer ID Missing " . $customer_id); 
}

}

   function get_plaid_token($public_token)
    {
        global $plaid_client_id, $plaid_secret, $plaid_url;
        $data = array(
            "client_id" => $plaid_client_id,
            "secret" => $plaid_secret,
            "public_token" => $public_token
        );
        $data_fields = json_encode($data);        
        //initialize session
        $ch=curl_init($plaid_url . "/item/public_token/exchange");
        //set options
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
          'Content-Type: application/json',                                                                                
          'Content-Length: ' . strlen($data_fields))                                                                       
        );   
        //execute session
        $token_json = curl_exec($ch);
        $exchange_token = json_decode($token_json,true);          
        //close session
        curl_close($ch);        
        return $exchange_token;
    }
function saveCustomerToken($customer_id, $token_type, $token){
    //TODO Save to your Database
    error_log("Customer ID: " . $customer_id . $token_type . ": " . $token);
}
}
?>