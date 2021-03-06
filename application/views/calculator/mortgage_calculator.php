<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body
{
  font-family: 'Poppins', sans-serif;
}
  .input
  {
    border 1px solid;
    border-radius: 50px;
  }
  .buttons
  {
   border 1px solid;
    border-radius: 50px; 
    background-color: #2E94C3;
  }

  .select
  {
    background-color: #347EB8;
     border 1px solid black;
    border-radius: 50px; 
    color:white;
    font-weight: 300;
  }
</style>
<div class="pcoded-content">
<div class="page-header card">
   <div class="row align-items-end">
      <div class="col-lg-8">
         <div class="page-header-title">
            <i class="fa fa-calculator bg-c-blue"></i>
            <div class="d-inline">
               <h5>calculator</h5>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="page-header-breadcrumb">
            <ul class=" breadcrumb breadcrumb-title">
               <li class="breadcrumb-item">
                  <a href="index.html">
                  <i class="feather icon-home"></i>
                  </a>
               </li>
               <li class="breadcrumb-item">
                  <a href="#!">calculator</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-body">
<div class="row">
<div class="col-sm-12">
<div class="card">

<div class="card-block">
<div class="row">
<div class="container">
   <ul class="nav nav-tabs buttons" style="border:solid 1px #B0B1B2; padding: 5px; background-color: #FFFFFF">
      <li style="padding: 3px" class="active"><a href="#firsttab" data-toggle="tab" class="btn btn-primary btn-sm buttons">Mortgage</a></li>
      <li style="padding: 3px"><a href="#secondtab" data-toggle="tab" class="btn btn-primary btn-sm buttons">Investment</a></li>
      <li style="padding: 3px"><a href="#thirdtab" data-toggle="tab" class="btn btn-primary btn-sm buttons">Home affordability</a></li>
       <li style="padding: 3px"><a href="#loan_re_payment" data-toggle="tab" class="btn btn-primary btn-sm buttons">Loan Repayment</a></li>
        <li style="padding: 3px"><a href="#saving_goal" data-toggle="tab" class="btn btn-primary btn-sm buttons">Saving Calculator</a></li>
   </ul>
   <div class="tab-content mt-2">
      <div class="tab-pane active" id="firsttab">
         <h3 class="mt-2">Mortgage Details</h3>
         <div class="row">
            <div class="col-md-6" style="background-color: #EFEFEF;">
               <div class="col-md-8">
                  <div class="form-group">
                     <label>Purchase Price</label>
                     <input type="text" name="purchase_price" placeholder="Purchase Price" class="form-control input col-md-12" id="purchase_price">
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="form-group">
                     <label>% Deposit</label>
                     <input type="text" name="deposit" placeholder="% Deposit" class="form-control input" id="deposit">
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="form-group">
                     <label>Intrest Rate</label>
                     <input type="text" name="intrest_rate" placeholder="Intrest Rate" class="form-control input" id="intrest_rate">
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="form-group">
                     <label>Mortgage Length (Year)</label>
                     <input type="text" name="mortgage_length" placeholder="Mortgage Length (Year)" class="form-control input" id="mortgage_length">
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="form-group">
                     <label>Deposit</label>
                     <input type="text" name="deposit" placeholder="Deposit" class="form-control input" id="deposit">
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="form-group">
                     <label>Loan Amount</label>
                     <input type="text" name="loan_amount" placeholder="Loan Amount" class="form-control input" id="loan_amount">
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="form-group">
                     <label>Payment With principle</label>
                     <input type="text" name="payment_principle" placeholder="Payment With principle" class="form-control input" id="payment_principle">
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="col-md-12 col-lg-12">
                  <div class="card" style="background-color: #EFEFEF;">
                     <div class="card-header">
                        <h5>Monthly payment by intrest rate</h5>
                        
                     </div>
                     <div class="card-block">
                        <div id="placeholder" class="demo-placeholder" style="height:300px;"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 mt-4">
               <table class="table table-borderd">
                  <thead class="bg bg-primary text-white">
                     <tr>
                        <th>Intrest rate loan Amount</th>
                        <th>Intrest rate loan Amount</th>
                        <th>Intrest rate loan Amount</th>
                       
                     </tr>
                  </thead>
               </table>
            </div>
         </div>
      </div>
      <div class="tab-pane" id="secondtab">
         <div class="row mt-2">
            <div class="col-md-6">
               <div class="col-md-12 mt-2">
                  <label>Starting Amount</label>
                  <input type="text" name="starting_amount" placeholder="Starting Amount" class="form-control input" id="starting_amount">
               </div>
            </div>
            <div class="col-md-6">
               <div class="col-md-12 mt-2">
                  <label>Additional Contribution</label>
                  <input type="text" name="additional_contribution" placeholder="Additional Contribution" class="form-control input" id="additional_contribution">
               </div>
            </div>
            <div class="col-md-6">
               <div class="col-md-12">
                  <label>Rate Of Return</label>
                  <input type="text" name="rate_of_return" placeholder="Rate Of Return" class="form-control input" id="rate_of_return">
               </div>
            </div>
            <div class="col-md-6">
               <div class="col-md-12">
                  <label>Years Of Grow</label>
                  <input type="text" name="years_of_grow" placeholder="Years Of Grow" class="form-control input" id="years_of_grow">
               </div>
            </div>
         </div>
         <hr>
         <div class="row">
            <div class="col-xl-12 col-md-12">
               <h1 align="center">The investment will be wroth</h1>
               <h3 align="center" class="m-b-30 f-w-700">$10,000</h3>
            </div>
         </div>
      </div>
      <div class="tab-pane" id="thirdtab">
         <div class="row">
           <div class="col-md-6 mt-3" style="margin: auto"><h3>How Much house can i afford?</h3></div>
         </div>
           <div class="row">
            <div class="col-md-6">
               <div class="col-md-12">
                  <label>Annual Income</label>
                  <input type="text" name="anual_income" placeholder="Annual Income" class="form-control input" id="anual_income">
               </div>
            </div>
            <div class="col-md-6">
               <div class="col-md-12">
                  <label>Downpayment</label>
                  <input type="text" name="downpayment" placeholder="Downpayment" class="form-control input" id="Downpayment">
               </div>
            </div>
            <div class="col-md-6">
               <div class="col-md-12">
                  <label>Monthly Debit</label>
                  <input type="text" name="monthly_debit" placeholder="Monthly Debit" class="form-control input" id="monthly_debit">
               </div>
            </div>
            <div class="col-md-6">
               <div class="col-md-12">
                  <label>Intrest Rate</label>
                  <input type="text" name="intrest_rate" placeholder="Intrest Rate" class="form-control input" id="intrest_rate">
               </div>
            </div>
         </div>
          <div class="row">
            <div class="col-xl-12 col-md-12">
               <h1 align="center" class="mt-2">A Home Price of</h1>
               <h3 align="center" class="m-b-30 f-w-700 mt-2">186,777</h3>
            <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h4 align="center" class="mt-3">is affordable for you</h4>
            <p class="col-md-6 mt-3" align="justify" style="margin: auto">Based on annual income downpayment pand months debit you entered a monthly home payment of <b>$1144</b> looks to be comfortable for you. It's wise to go far a house that under your budget. but you do have some room left to afford more home</p> 
            </div>
            <div class="col-md-6 card mt-5">
              <table class="table table-borderd">
                <thead>
                  <tr>
                    <th>Downpayment</th>
                    <th>$10946</th>
                  </tr>

                  <tr>
                    <th>Closing Coast</th>
                    <th>$10946</th>
                  </tr>

                  <tr>
                    <th>Downpayment</th>
                    <th>$10946</th>
                  </tr>
                </thead>
                </table>
            </div>
            
             <div class="col-md-6 card mt-5">
              <table class="table table-borderd">
                <thead>
                  <tr>
                    <th>Downpayment</th>
                    <th>$10946</th>
                  </tr>

                  <tr>
                    <th>Closing Coast</th>
                    <th>$10946</th>
                  </tr>

                  <tr>
                    <th>Downpayment</th>
                    <th>$10946</th>
                  </tr>
                </thead>
              </table>
            </div>

         </div>
      </div>
      <div class="tab-pane" id="loan_re_payment">
        <div class="row">
          <div class="col-md-4">
            <div class="col-md-12">
              <label>Enter Loan Amount</label>
              <input type="text" class="form-control input" name="loan_amount" placeholder="Enter Loan Amount">
            </div>

            <div class="col-md-12">
              <label>Enter Loan Term</label>
              <input type="text" class="form-control input" name="loan_term" placeholder="Enter Loan Terms">
            </div>

             <div class="col-md-12">
              <label>Enter Intrest Term</label>
              <input type="text" class="form-control input" name="intrest_term" placeholder="Enter Intrest Term">
            </div>
          </div>

           <div class="col-md-4">
           <div class="col-md-12">
              <label>Loan Type</label>
              <select name="loan_type" class="form-control select">
                <option>Select Loan Type</option>
              </select>
            </div>

           <div class="col-md-12">
              <label>Loan Type</label>
              <select name="loan_type" class="form-control select">
                <option>Select Loan Type</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>

      <div class="tab-pane" id="saving_goal">
       <h3 align="center" style="font-weight: bold">Monthly Saving Goals</h3>
       <div class="row">
        <div class="col-md-6">
          <h4 align="center" style="font-weight: bolder">Saving Calculator</h4>
          <div class="col-md-12">
            <label>Current amount you saved</label>
            <input type="text" name="current_saved" placeholder="Current amount you saved" class="form-control input">
          </div>

           <div class="col-md-12">
            <label>Number of year you can save</label>
            <input type="text" name="number_of_year" placeholder="Number of year you can save" class="form-control input">
          </div>

           <div class="col-md-12">
            <label>Annual Percentage Yeild (APY)</label>
            <input type="text" name="apy" placeholder="Annual Percentage Yeild (APY)" class="form-control input">
          </div>

           <div class="col-md-12">
            <label>Amount you want to save</label>
            <input type="text" name="save_amount" placeholder="Amount you want to save" class="form-control input">
          </div>
       </div>
       <div class="col-md-6">
         <canvas id="myChart"></canvas>
       </div>
      </div>

    </div>


   </div>
</div>
<script>
  var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["M", "T", "W", "T", "F", "S", "S"],
    datasets: [{
      label: 'apples',
      data: [12, 19, 3, 17, 28, 24, 7],
      backgroundColor: "rgba(153,255,51,1)"
    }, {
      label: 'oranges',
      data: [30, 29, 5, 5, 20, 3, 10],
      backgroundColor: "rgba(255,153,0,1)"
    }]
  }
});
</script>
<div id="styleSelector"></div>