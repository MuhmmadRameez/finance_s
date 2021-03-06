<script src="https://cdn.plaid.com/link/v2/stable/link-initialize.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script type="text/javascript">
$(document).ready(function() { 
  // Trigger the standard Institution Select view
  document.getElementById('linkButton').onclick = function() {
    linkHandler.open();
  };  
});        
  </script>
Please link your <strong>primary bank account</strong>.
<button id="linkButton">Link Your Bank Account</button>              
  <script>
  var linkHandler = Plaid.create({
    selectAccount: true,
    env: '<?php echo $plaid_env ?>',
    apiVersion: 'v2',
    clientName: 'Client Name',
    key: '<?php echo $plaid_public ?>',
    product: ['auth', 'transactions', 'identity'],
    webhook: 'https://myurl.com/webhooks/p_responses.php',
    onLoad: function() {
      // The Link module finished loading.
    },
    onSuccess: function(public_token, metadata) {
    // The onSuccess function is called when the user has successfully
    // authenticated and selected an account to use.    
      $.post( 'process_plaid_token.php', {pt:public_token,md:metadata,id:"<?php echo $customer_id?>"}, function( data ) {                        
          console.log("data : "+data);
           if (data=="Success"){              
              console.log("Success");
              window.location.replace("thankyou.php");//Let users know the process was successful 
           }else{
             console.log("Error");
             window.location.replace("error.php");//Let users know the process failed
           }
        });    
    },
    onExit: function(err, metadata) {
      // The user exited the Link flow. This is not an Error, so much as a user-directed exit   
      if (err != null) {
        console.log(err);
        console.log(metadata);        
      }
    },
  });
  </script> 