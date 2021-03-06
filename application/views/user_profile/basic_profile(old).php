<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
   #heading {
   text-transform: uppercase;
   color: #673AB7;
   font-weight: normal
   }
   #msform {
   text-align: center;
   position: relative;
   margin-top: 20px
   }
   #msform fieldset {
   background: white;
   border: 0 none;
   border-radius: 0.5rem;
   box-sizing: border-box;
   width: 100%;
   margin: 0;
   padding-bottom: 20px;
   position: relative
   }
   .form-card {
   text-align: left
   }
   #msform fieldset:not(:first-of-type) {
   display: none
   }
   #msform input,
   #msform textarea {
   padding: 8px 15px 8px 15px;
   border: 1px solid #ccc;
   border-radius: 0px;
   margin-bottom: 25px;
   margin-top: 2px;
   width: 100%;
   box-sizing: border-box;
   font-family: montserrat;
   color: #2C3E50;
   background-color: #ECEFF1;
   font-size: 16px;
   letter-spacing: 1px
   }
   #msform input:focus,
   #msform textarea:focus {
   -moz-box-shadow: none !important;
   -webkit-box-shadow: none !important;
   box-shadow: none !important;
   border: 1px solid #673AB7;
   outline-width: 0
   }
   #msform .action-button {
   width: 100px;
   background: #673AB7;
   font-weight: bold;
   color: white;
   border: 0 none;
   border-radius: 0px;
   cursor: pointer;
   padding: 10px 5px;
   margin: 10px 0px 10px 5px;
   float: right
   }
   #msform .action-button:hover,
   #msform .action-button:focus {
   background-color: #311B92
   }
   #msform .action-button-previous {
   width: 100px;
   background: #616161;
   font-weight: bold;
   color: white;
   border: 0 none;
   border-radius: 0px;
   cursor: pointer;
   padding: 10px 5px;
   margin: 10px 5px 10px 0px;
   float: right
   }
   #msform .action-button-previous:hover,
   #msform .action-button-previous:focus {
   background-color: #000000
   }
   .card {
   z-index: 0;
   border: none;
   position: relative
   }
   .fs-title {
   font-size: 25px;
   color: #673AB7;
   margin-bottom: 15px;
   font-weight: normal;
   text-align: left
   }
   .purple-text {
   color: #673AB7;
   font-weight: normal
   }
   .steps {
   font-size: 25px;
   color: gray;
   margin-bottom: 10px;
   font-weight: normal;
   text-align: right;


   }
   .fieldlabels {
   color: gray;
   text-align: left
   }
   #progressbar {
   margin-bottom: 30px;
   overflow: hidden;
   color: lightgrey
   }
   #progressbar .active {
   color: #673AB7
   }
   #progressbar li {
   list-style-type: none;
   font-size: 15px;
   width: 20%;
   float: left;
   position: relative;
   font-weight: 400;

   }
   #progressbar #account:before {
   font-family: FontAwesome;
content: ' \279C';
   }
   #progressbar #personal:before {
   font-family: FontAwesome;
 content: ' \279C';
   }
   #progressbar #payment:before {
   font-family: FontAwesome;
 content: ' \279C';
   }
   #progressbar #debit:before {
   font-family: FontAwesome;
 content: ' \279C';
   }
   #progressbar #confirm:before {
   font-family: FontAwesome;
 content: ' \279C';
   }
   #progressbar li:before {
   width: 50px;
   height: 50px;
   line-height: 45px;
   display: block;
   font-size: 20px;
   color: #ffffff;
   background: lightgray;
   border-radius: 50%;
   margin: 0 auto 10px auto;
   padding: 2px
   }
   #progressbar li:after {
   content: '';
   width: 100%;
   height: 2px;
   background: lightgray;
   position: absolute;
   left: 0;
   top: 25px;
   z-index: -1
   }
   #progressbar li.active:before,
   #progressbar li.active:after {
   background: #673AB7
   }
   .progress {
   height: 20px
   }
   .progress-bar {
   background-color: #673AB7
   }
   .fit-image {
   width: 100%;
   object-fit: cover
   }
   /* Basic Rules */
   .switch input { 
   display:none;
   }
   .switch {
   display:inline-block;
   width:60px;
   height:30px;
   margin:8px;
   transform:translateY(50%);
   position:relative;
   }
   /* Style Wired */
   .slider {
   position:absolute;
   top:0;
   bottom:0;
   left:0;
   right:0;
   border-radius:30px;
   box-shadow:0 0 0 2px #777, 0 0 4px #777;
   cursor:pointer;
   border:4px solid transparent;
   overflow:hidden;
   transition:.4s;
   }
   .slider:before {
   position:absolute;
   content:"";
   width:100%;
   height:100%;
   background:#777;
   border-radius:30px;
   transform:translateX(-30px);
   transition:.4s;
   }
   input:checked + .slider:before {
   transform:translateX(30px);
   background:limeGreen;
   }
   input:checked + .slider {
   box-shadow:0 0 0 2px limeGreen,0 0 2px limeGreen;
   }
   /* Style Flat */
   .switch.flat .slider {
   box-shadow:none;
   }
   .switch.flat .slider:before {
   background:#FFF;
   }
   .switch.flat input:checked + .slider:before {
   background:white;
   }
   .switch.flat input:checked + .slider {
   background:limeGreen;
   }
   .form-control, .thumbnail {
   border-radius: 2px;
   }
   .btn-danger {
   background-color: #B73333;
   }
   /* File Upload */
   .fake-shadow {
   box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
   }
   .fileUpload {
   position: relative;
   overflow: hidden;
   }
   .fileUpload #logo-id {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   padding: 0;
   font-size: 33px;
   cursor: pointer;
   opacity: 0;
   filter: alpha(opacity=0);
   }
   .img-preview {
   max-width: 100%;
   }
</style>
<div class="pcoded-content">
<div class="page-header card">
   <div class="row align-items-end">
      <div class="col-lg-12">
         <div class="page-header-title">
            <i class="feather icon-tv bg-c-blue"></i>
            <div class="d-inline">
               <h5>Basic Profile</h5>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="page-header-breadcrumb">
            <ul class=" breadcrumb breadcrumb-title">
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
<div class="col-md-12">
<div class="row">
   <div class="col-lg-12 col-md-12">
      <div class="row justify-content-center">
         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card col-md-12">
               <h2 id="heading">Complete Your Profile</h2>
               <p>Fill all form field to go to next step</p>
               <form method="post" action="<?= site_url('User_profile/insert_basic') ?>" id="msform" enctype="multipart/form-data">
                  <!-- progressbar -->
                  <ul id="progressbar">
                     <li class="active" id="account"><strong>Basic Profile</strong></li>
                     <li id="personal"><strong>Financial Profile</strong></li>
                     <li id="payment"><strong>Investment</strong></li>
                     <li id="debit"><strong>Debits</strong></li>
                     <li id="payment"><strong>Savings</strong></li>
                  </ul>
                  <fieldset>
                     <div class="form-card">
                        <div class="row">
                           <div class="col-md-4 col-md-offset-4" style="margin: auto">
                              <div class="form-group">
                                 <div class="main-img-preview" style="border-radius: 1px dashed">
                                    <img class="thumbnail img-preview" src="">
                                 </div>
                                 <div class="input-group">
                                    <input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
                                    <div class="input-group-btn">
                                       <div class="fileUpload btn btn-primary fake-shadow">
                                          <span><i class="glyphicon glyphicon-upload"></i> Upload Picture</span>
                                          <input id="logo-id" name="profile_image" type="file" class="attachment_upload">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                            <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                              <label>Firstname</label>
                              <input type="text" name="name" placeholder="Firstname" class="form-control" style="border:1px solid;border-radius: 20px" required="" value="<?= $basic_profile['first_name']?? null ?>">
                           </div>
                           <div class="col-md-3">
                              <label>Lastname</label>
                              <input type="text" name="lastname" placeholder="Lastname" class="form-control" style="border:1px solid;border-radius: 20px" required="" value="<?= $basic_profile['last_name']?? null ?>">
                           </div>
                           <div class="col-md-3">
                              <label>Date Of Birth</label>
                              <input type="date" name="dob" class="form-control" style="border:1px solid;border-radius: 20px"  value="<?= $basic_profile['dob']?? null ?>" required="">
                           </div>

                            <div class="col-md-3">
                              <label>Age</label>
                              <input type="text" placeholder="Age" name="age" class="form-control" style="border:1px solid;border-radius: 20px" required="" value="<?= $basic_profile['age']?? null ?>">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <label>Country</label>
                              <input type="text" name="country" placeholder="Country Name" class="form-control" style="border:1px solid;border-radius: 20px" required="" value="<?= $basic_profile['country']?? null ?>">
                           </div>
                           <div class="col-md-3">
                              <label>Province</label>
                              <input type="text" name="province" placeholder="Province" class="form-control" style="border:1px solid;border-radius: 20px" required=""value="<?= $basic_profile['province']?? null ?>">
                           </div>
                           <div class="col-md-3">
                              <label>City</label>
                              <input type="text" name="city" placeholder="City" class="form-control"style="border:1px solid;border-radius: 20px" required="" value="<?= $basic_profile['city']?? null ?>">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <label>Language</label>
                              <input type="text" name="language" placeholder="Language" class="form-control"style="border:1px solid;border-radius: 20px" required=""value="<?= $basic_profile['language']?? null ?>">
                           </div>
                           <div class="col-md-3">
                              <label>Gender</label>
                              <select style="border:1px solid;border-radius: 20px" name="gender" class="form-control" required="">
                                 <option value="">Select Gender</option>
                                 <option value="m">Male</option>
                                 <option value="f">Female</option>
                              </select>
                           </div>

                           <div class="col-md-3">
                              <label>Address</label>
                              <textarea placeholder="Address" name="adress" class="form-control" style="resize: none" required=""><?= $basic_profile['adress']??null ?></textarea>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-3">
                              <label>Martial Status</label>
                              <div>
                                 <label class="switch">
                                 <input type="checkbox" name="martial">
                                 <span class="slider"></span>
                                 </label> 
                                 YES/NO
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <h1 class="fs-title text-center">Spouce & Marriage Information</h1>
                           </div>
                           <div class="col-md-4">
                              <label>Spouce Name</label>
                              <input type="text"  name="spouce_name" placeholder="Spouce Name"style="border:1px solid;border-radius: 20px">
                           </div>
                           <div class="col-md-4">
                              <label>Marriage Date</label>
                              <input type="date" name="marriage_date" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                        </div>
                        <div class="row customer_records">
                           <div class="col-md-12">
                              <h1 class="fs-title text-center">Children Detail</h1>
                           </div>
                           <div class="col-md-4">
                              <label>Child Name</label>
                              <input type="text" name="children_name" placeholder="Child Name"style="border:1px solid;border-radius: 20px">
                           </div>
                           <div class="col-md-4">
                              <label>Date Of Birth</label>
                              <input type="date" name="date_of_birth" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <button type="button" style="margin-top: 28px;border-radius: 20px;" class="btn btn-primary extra-fields-customer"><i class="fa fa-plus"></i>ADD MORE</button>
                        </div>
                     </div>
                     <input type="button" style="width: 150px;border-radius: 20px;" name="next" class="next action-button" value="Next" />
                  </fieldset>
                  <fieldset>
                     <div class="form-card">
                        <div class="row">
                           <div class="col-md-6">
                              <label>Salary Income</label>
                              <input type="text" value="<?= $financial_profile['salary_income'] ?>" name="salary_income" placeholder="Salary Income" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                           <div class="col-md-6">
                              <label>Rental Income</label>
                              <input type="text" value="<?= $financial_profile['rental_income'] ?>" name="rental_income" placeholder="Rental Income" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                           <div class="col-md-6">
                              <label>Commission Income</label>
                              <input type="text" value="<?= $financial_profile['commision_income'] ?>" name="commision_income" placeholder="Commission Income" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                           <div class="col-md-6">
                              <label>Other Income</label>
                              <input type="text" value="<?= $financial_profile['other_income'] ?>" name="other_income" placeholder="Other Income" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                           <div class="col-md-6">
                              <label>Dividends</label>
                              <input type="text" value="<?= $financial_profile['dividends'] ?>" name="dividends" placeholder="Dividends" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                        </div>
                     </div>
                     <input type="button" style="width: 150px;border-radius: 20px;" name="next" class="next action-button" value="Next" />
                     <input type="button" name="previous" style="border:1px solid;border-radius: 20px" class="previous action-button-previous" value="Previous" />
                  </fieldset>
                  <fieldset>
                     <div class="form-card">
                        <table class="table table-bordered table-hover" id="tab_logic">
        <thead>
          <tr style="background-color: rgb(46, 148, 195);color:white;font-weight: 900">
            <th class="text-center"> # </th>   
            <th class="text-center"> Text </th>
            <th class="text-center"> Currency </th>
            <th class="text-center"> Percentage </th>
            <th class="text-center"> Selection Monthly/Yearly </th>
          </tr>
        </thead>
        <tbody>
          <tr id='addr0'>
            <td>1</td>
            <td>
               <input type="hidden" name="user_id[]" value="<?= $_SESSION['id'] ?>">
               <input type="text" style="border:1px solid;border-radius: 20px" name='tax[]'  placeholder='Enter Text' class="form-control"/>
            </td>
            <td><input type="text" style="border:1px solid;border-radius: 20px" name='currency[]' placeholder='Enter Currency' class="form-control qty" step="0" min="0"/></td>
            <td><input type="text" style="border:1px solid;border-radius: 20px" name='per[]' placeholder='Enter Percentage' class="form-control price" step="0.00" min="0"/></td>
            <td>
               <select class="form-control" name="monthly[]" style="border:1px solid;border-radius: 20px">
                  <option>Select Type</option>
                  <option>Monthly</option>
                  <option>Yearly</option>
               </select>
            </td>
          </tr>
          <tr id='addr1'></tr>
        </tbody>
      </table>

      <div class="col-md-12">
      <button type="button" style="border:1px solid;border-radius: 20px" id="add_row" class="btn btn-default pull-left">Add Row</button>
      <button type="button" style="border:1px solid;border-radius: 20px" id='delete_row' class="pull-left btn btn-danger">Delete Row</button>
       </div>
                     </div>

                     <input type="button" style="width: 150px;border-radius: 20px;" name="next" class="next action-button" value="Next" /> <input type="button" style="border:1px solid;border-radius: 20px" name="previous" class="previous action-button-previous" value="Previous" />
                  </fieldset>
                  <fieldset>
                     <div class="form-card">
                        <div class="row">
                           <div class="col-md-12">
                              <h4 class="text-center" style="font-weight: 900">Account Payable</h4>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">Currency</div>
                              <input type="text" name="account_curruncy" style="border:1px solid;border-radius: 20px"  placeholder="Currency" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Return Per Annum</div>
                              <input type="text" name="rate_per_anum" style="border:1px solid;border-radius: 20px" placeholder="Currency" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Frequency of return/Intrest</div>
                              <input type="text" name="return_intrest" style="border:1px solid;border-radius: 20px" placeholder="Frequency of return/Intrest" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Minimum Payment</div>
                              <input type="text" name="minimum_payment" style="border:1px solid;border-radius: 20px" placeholder="Minimum Payment" class="form-control">
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-12">
                              <h4 class="text-center" style="font-weight: 900">Auto Loan</h4>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">Liability</div>
                              <input type="text" name="auto_loan_liability" style="border:1px solid;border-radius: 20px"  placeholder="Liability" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Return Per Annum</div>
                              <input type="text" name="auto_loan_rate_per_anum" style="border:1px solid;border-radius: 20px" placeholder="Currency" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Frequency of return/Intrest</div>
                              <input type="text" name="auto_loan_return_intrest" style="border:1px solid;border-radius: 20px" placeholder="Frequency of return/Intrest" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Minimum Payment</div>
                              <input type="text" name="auto_loan_minimum_payment" style="border:1px solid;border-radius: 20px" placeholder="Minimum Payment" class="form-control">
                           </div>
                        </div>


                          <div class="row">
                           <div class="col-md-12">
                              <h4 class="text-center" style="font-weight: 900">Credit Card Debit card</h4>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">Liability</div>
                              <input type="text" name="debit_credit_liability" style="border:1px solid;border-radius: 20px"  placeholder="Liability" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Return Per Annum</div>
                              <input type="text" name="debit_credit_rate_per_anum" style="border:1px solid;border-radius: 20px" placeholder="Currency" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Frequency of return/Intrest</div>
                              <input type="text" name="debit_credit_return_intrest" style="border:1px solid;border-radius: 20px" placeholder="Frequency of return/Intrest" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Minimum Payment</div>
                              <input type="text" name="debit_credit_minimum_payment" style="border:1px solid;border-radius: 20px" placeholder="Minimum Payment" class="form-control">
                           </div>
                        </div>


                         <div class="row">
                           <div class="col-md-12">
                              <h4 class="text-center" style="font-weight: 900">Customer Loan Or Intallment</h4>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">Liability</div>
                              <input type="text" name="customer_loan_liability" style="border:1px solid;border-radius: 20px"  placeholder="Liability" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Return Per Annum</div>
                              <input type="text" name="customer_loan_rate_per_anum" style="border:1px solid;border-radius: 20px" placeholder="Currency" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Frequency of return/Intrest</div>
                              <input type="text" name="customer_loan_return_intrest" style="border:1px solid;border-radius: 20px" placeholder="Frequency of return/Intrest" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Minimum Payment</div>
                              <input type="text" name="customer_loan_minimum_payment" style="border:1px solid;border-radius: 20px" placeholder="Minimum Payment" class="form-control">
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-12">
                              <h4 class="text-center" style="font-weight: 900">Real Estate Mortgages</h4>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">Liability</div>
                              <input type="text" name="real_estate_liability" style="border:1px solid;border-radius: 20px"  placeholder="Liability" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Return Per Annum</div>
                              <input type="text" name="real_estate_rate_per_anum" style="border:1px solid;border-radius: 20px" placeholder="Currency" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Frequency of return/Intrest</div>
                              <input type="text" name="real_estate_return_intrest" style="border:1px solid;border-radius: 20px" placeholder="Frequency of return/Intrest" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Minimum Payment</div>
                              <input type="text" name="real_estate_minimum_payment" style="border:1px solid;border-radius: 20px" placeholder="Minimum Payment" class="form-control">
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-12">
                              <h4 class="text-center" style="font-weight: 900">Student Loans</h4>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">Liability</div>
                              <input type="text" name="student_loan_liability" style="border:1px solid;border-radius: 20px"  placeholder="Liability" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Return Per Annum</div>
                              <input type="text" name="student_loan_rate_per_anum" style="border:1px solid;border-radius: 20px" placeholder="Currency" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Frequency of return/Intrest</div>
                              <input type="text" name="student_loan_return_intrest" style="border:1px solid;border-radius: 20px" placeholder="Frequency of return/Intrest" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Minimum Payment</div>
                              <input type="text" name="student_loan_minimum_payment" style="border:1px solid;border-radius: 20px" placeholder="Minimum Payment" class="form-control">
                           </div>
                        </div>


                        <div class="row">
                           <div class="col-md-12">
                              <h4 class="text-center" style="font-weight: 900">Unpaid Tax</h4>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">Liability</div>
                              <input type="text" name="unpaid_tax_liability" style="border:1px solid;border-radius: 20px"  placeholder="Liability" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Return Per Annum</div>
                              <input type="text" name="unpaid_tax_rate_per_anum" style="border:1px solid;border-radius: 20px" placeholder="Currency" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Frequency of return/Intrest</div>
                              <input type="text" name="unpaid_tax_return_intrest" style="border:1px solid;border-radius: 20px" placeholder="Frequency of return/Intrest" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Minimum Payment</div>
                              <input type="text" name="unpaid_tax_minimum_payment" style="border:1px solid;border-radius: 20px" placeholder="Minimum Payment" class="form-control">
                           </div>
                        </div>

                         <div class="row">
                           <div class="col-md-12">
                              <h4 class="text-center" style="font-weight: 900">Other Liabilities</h4>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">Liability</div>
                              <input type="text" name="other_liabilities_liability" style="border:1px solid;border-radius: 20px"  placeholder="Liability" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Return Per Annum</div>
                              <input type="text" name="money_owed_rate_per_anum" style="border:1px solid;border-radius: 20px" placeholder="Currency" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Frequency of return/Intrest</div>
                              <input type="text" name="money_owed_return_intrest" style="border:1px solid;border-radius: 20px" placeholder="Frequency of return/Intrest" class="form-control">
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">Minimum Payment</div>
                              <input type="text" name="money_owed_minimum_payment" style="border:1px solid;border-radius: 20px" placeholder="Minimum Payment" class="form-control">
                           </div>
                        </div>

                

                  

                     </div>
                     <input type="button" style="width: 150px;border-radius: 20px;" name="next" class="next action-button" value="Next" /> <input type="button" style="border:1px solid;border-radius: 20px" name="previous" class="previous action-button-previous" value="Previous" />
                  </fieldset>
                  <fieldset>
                     <div class="form-card">
                        <div class="row">
                           <div class="col-md-6">
                              <label>Emergency Fund</label>
                              <input type="text" name="emergency_fund" placeholder="Emergency Fund" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                           <div class="col-md-6">
                              <label>Car Replacement</label>
                             <input type="text" name="car_replacement" placeholder="Emergency Fund" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                           <div class="col-md-6">
                              <label>Retirement Fund</label>
                             <input type="text" name="retirement" placeholder="Emergency Fund" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                           <div class="col-md-6">
                              <label>Investment</label>
                             <input type="text" name="investment" placeholder="Emergency Fund" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                           <div class="col-md-6">
                              <label>Education Fund</label>
                             <input type="text" name="education_fund" placeholder="Emergency Fund" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                           <div class="col-md-6">
                              <label>Other</label>
                             <input type="text" name="other_fund" placeholder="Emergency Fund" class="form-control"style="border:1px solid;border-radius: 20px">
                           </div>
                        </div>
                     </div>
                     <input style="width: 150px;border-radius: 20px;" type="submit"  class="action-button" value="Save Record" /> <input style="width: 150px;border-radius: 20px;" type="button" name="previous" class="previous action-button-previous" value="Previous" />
                  </fieldset>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   $(document).ready(function(){
   
   var current_fs, next_fs, previous_fs; //fieldsets
   var opacity;
   
   $(".next").click(function(){
   
   current_fs = $(this).parent();
   next_fs = $(this).parent().next();
   
   //Add Class Active
   $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
   
   //show the next fieldset
   next_fs.show();
   //hide the current fieldset with style
   current_fs.animate({opacity: 0}, {
   step: function(now) {
   // for making fielset appear animation
   opacity = 1 - now;
   
   current_fs.css({
   'display': 'none',
   'position': 'relative'
   });
   next_fs.css({'opacity': opacity});
   },
   duration: 600
   });
   });
   
   $(".previous").click(function(){
   
   current_fs = $(this).parent();
   previous_fs = $(this).parent().prev();
   
   //Remove class active
   $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
   
   //show the previous fieldset
   previous_fs.show();
   
   //hide the current fieldset with style
   current_fs.animate({opacity: 0}, {
   step: function(now) {
   // for making fielset appear animation
   opacity = 1 - now;
   
   current_fs.css({
   'display': 'none',
   'position': 'relative'
   });
   previous_fs.css({'opacity': opacity});
   },
   duration: 600
   });
   });
   
   $('.radio-group .radio').click(function(){
   $(this).parent().find('.radio').removeClass('selected');
   $(this).addClass('selected');
   });
   
   $(".submit").click(function(){
   return false;
   })
   
   });
</script>
<script>
   $(document).ready(function() {
      var brand = document.getElementById('logo-id');
      brand.className = 'attachment_upload';
      brand.onchange = function() {
          document.getElementById('fakeUploadLogo').value = this.value.substring(12);
      };
   
      // Source: http://stackoverflow.com/a/4459419/6396981
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function(e) {
                  $('.img-preview').attr('src', e.target.result);
              };
              reader.readAsDataURL(input.files[0]);
          }
      }
      $("#logo-id").change(function() {
          readURL(this);
      });
   });
   
   
   
</script>
<script>
   $(document).ready(function(){
    var i=1;
    $("#add_row").click(function(){b=i-1;
         $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
         $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
         i++; 
   });
    $("#delete_row").click(function(){
      if(i>1){
      $("#addr"+(i-1)).html('');
      i--;
      }
      calc();
   });
   
   $('#tab_logic tbody').on('keyup change',function(){
      calc();
   });
   $('#tax').on('keyup change',function(){
      calc_total();
   });
   

});

function calc()
{
   $('#tab_logic tbody tr').each(function(i, element) {
      var html = $(this).html();
      if(html!='')
      {
         var qty = $(this).find('.qty').val();
         var price = $(this).find('.price').val();
         $(this).find('.total').val(qty*price);
         
         calc_total();
      }
    });
}

function calc_total()
{
   total=0;
   $('.total').each(function() {
        total += parseInt($(this).val());
    });
   $('#sub_total').val(total.toFixed(2));
   tax_sum=(total/100)*$('#tax1').val();
   $('#tax_amount').val(tax_sum.toFixed(2));
   $('#total_amount').val((tax_sum+total).toFixed(2));
}
</script>