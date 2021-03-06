<style type="text/css">
   .switch-field {
   display: flex;
   margin-bottom: 36px;
   overflow: hidden;
   }
   .switch-field input {
   position: absolute !important;
   clip: rect(0, 0, 0, 0);
   height: 1px;
   width: 1px;
   border: 0;
   overflow: hidden;
   }
   .switch-field label {
   background-color: #e4e4e4;
   color: rgba(0, 0, 0, 0.6);
   font-size: 14px;
   line-height: 1;
   text-align: center;
   padding: 8px 16px;
   margin-right: -1px;
   border: 1px solid rgba(0, 0, 0, 0.2);
   box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
   transition: all 0.1s ease-in-out;
   }
   .switch-field label:hover {
   cursor: pointer;
   }
   .switch-field input:checked + label {
   background-color: #a5dc86;
   box-shadow: none;
   }
   .switch-field label:first-of-type {
   border-radius: 4px 0 0 4px;
   }
   .switch-field label:last-of-type {
   border-radius: 0 4px 4px 0;
   }
   /* This is just for CodePen. */
   .form {
   max-width: 600px;
   font-family: "Lucida Grande", Tahoma, Verdana, sans-serif;
   font-weight: normal;
   line-height: 1.625;
   margin: 8px auto;
   padding: 16px;
   }
   h2 {
   font-size: 18px;
   margin-bottom: 8px;
   }
   }
</style>


<div class="pcoded-content">
<div class="page-header card">
   <div class="row align-items-end">
      <div class="col-lg-8">
         <div class="page-header-title">
            <i class="feather icon-tv bg-c-blue"></i>
            <div class="d-inline">
               <h5>Forms Wizard</h5>
               <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> 
            </div>
         </div>
      </div>
      <div class="col-lg-4">
         <div class="page-header-breadcrumb">
            <ul class=" breadcrumb breadcrumb-title">
               <li class="breadcrumb-item"> <a href="index.html"><i class="feather icon-home"></i></a> </li>
               <li class="breadcrumb-item"> <a href="#!">Forms Wizard</a> </li>
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
                     <div class="card-header">
                        <h5><i class="fa fa-user"></i></h5>
                        <span>Basic Profile <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> 
                     </div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-md-12">
                              <div id="wizarda">
                                 <section>
                                    <form class="wizard-form" id="basic-forms" action="#">
                                       <h3> Registration </h3>
                                       <fieldset>
                                          <div class="row">
                                             <div class="col-md-4">
                                                <label>Firstname</label>
                                                <input type="text" name="name" placeholder="Firstname" class="form-control"> 
                                             </div>
                                             <div class="col-md-4">
                                                <label>Lastname</label>
                                                <input type="text" name="lastname" class="form-control" placeholder="Lastname"> 
                                             </div>
                                             <div class="col-md-4">
                                                <label>Dae Of Birth</label>
                                                <input type="date" name="dob" class="form-control" placeholder="Lastname"> 
                                             </div>
                                             <div class="col-md-4">
                                                <label>Adress</label>
                                                <textarea class="form-control" name="adress" placeholder="Adress" style="resize: none"></textarea>
                                             </div>
                                             <div class="col-md-4">
                                                <label>Country</label>
                                                <select class="form-control" name="country">
                                                   <option value="">Select Country</option>
                                                   <option value="pak">Pakistan</option>
                                                </select>
                                             </div>
                                             <div class="col-md-4">
                                                <label>Province</label>
                                                <select class="form-control" name="province">
                                                   <option value="">Select Province</option>
                                                   <option value="sindh">Sindh</option>
                                                </select>
                                             </div>
                                             <div class="col-md-4">
                                                <label>City</label>
                                                <select class="form-control" name="city">
                                                   <option value="">Select City</option>
                                                   <option value="khi">Karachi</option>
                                                </select>
                                             </div>
                                             <div class="col-md-4">
                                                <label>Language</label>
                                                <select class="form-control" name="language">
                                                   <option value="">English</option>
                                                   <option value="">French</option>
                                                </select>
                                             </div>
                                             <div class="col-md-4">
                                                <label>Gender</label>
                                                <div class="row">
                                                   <div class="switch-field">
                                                      <input type="radio" id="male" name="gender" value="yes" checked/>
                                                      <label for="male">Male</label>
                                                      <input type="radio" id="female" name="gender" value="no" />
                                                      <label for="female">Female</label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-md-4">
                                                <label>Age</label>
                                                <input type="number" name="age" class="form-control" placeholder="Enter Your Age"> 
                                             </div>
                                          </div>
                                          <div class="col-md-4">
                                             <label>Marital Status</label>
                                             <div class="row">
                                                <div class="switch-field">
                                                   <input type="radio" id="radio-one" name="martial_status" value="yes"/>
                                                   <label for="radio-one">Yes</label>
                                                   <input type="radio" id="radio-two" name="martial_status" value="no" checked/>
                                                   <label for="radio-two">No</label>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="spuce_div">
                                             <div class="row">
                                                
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                   <label>Marriage Date</label>
                                                   <input type="text" name="souce_name" class="form-control" id="spuce_name">
                                                </div>
                                             </div>


                                             <div class="col-md-4">
                                                <div class="form-group">
                                                   <label>Marriage Date</label>
                                                   <input type="date" name="souce_name" class="form-control" id="spuce_name">
                                                </div>
                                             </div>
                                             </div>
                                          </div>
                                           


                                           

                                       </fieldset>
                                       <h3> Financial Information </h3>
                                       <fieldset>
                                          <div class="row">
                                             <div class="col-md-8" style="margin: auto">
                                                <h4>Income</h4>
                                                <div class="form-group">
                                                   <label>Salary Income</label>
                                                   <input type="text" placeholder="Salary Income" name="salary_income" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                   <label>Rental Income</label>
                                                   <input type="text" placeholder="Rental Income" name="rental_income" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                   <label>Commision Income</label>
                                                   <input type="text" placeholder="Commision Income" name="commision_income" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                   <label>Other Income</label>
                                                   <input type="text" placeholder="Other Income" name="other_income" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                   <label>Dividends</label>
                                                   <input type="text" placeholder="Dividends" name="dividends" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                   <label>Salary Income</label>
                                                   <input type="text" placeholder="Salary Income" name="salary_income" class="form-control">
                                                </div>
                                             </div>
                                       </fieldset>
                                       <h3> Debit </h3>
                                       <fieldset>
                                       <div class="form-group row">
                                       <div class="col-sm-12">
                                       <label for="Company-2" class="block">Company:</label>
                                       </div>
                                       <div class="col-sm-12">
                                       <input id="Company-2a" name="Company:" type="text" class="form-control required"> </div>
                                       </div>
                                       <div class="form-group row">
                                       <div class="col-sm-12">
                                       <label for="CountryW-2" class="block">Country</label>
                                       </div>
                                       <div class="col-sm-12">
                                       <input id="CountryW-2a" name="Country" type="text" class="form-control required"> </div>
                                       </div>
                                       <div class="form-group row">
                                       <div class="col-sm-12">
                                       <label for="Position-2" class="block">Position</label>
                                       </div>
                                       <div class="col-sm-12">
                                       <input id="Position-2a" name="Position" type="text" class="form-control required"> </div>
                                       </div>
                                       </fieldset>
                                       <h3>Saving</h3>
                                       <fieldset>
                                       <div class="form-group row">
                                       <div class="col-sm-12">
                                       <label for="Company-2" class="block">Company:</label>
                                       </div>
                                       <div class="col-sm-12">
                                       <input id="Company-2a" name="Company:" type="text" class="form-control required"> </div>
                                       </div>
                                       <div class="form-group row">
                                       <div class="col-sm-12">
                                       <label for="CountryW-2" class="block">Country</label>
                                       </div>
                                       <div class="col-sm-12">
                                       <input id="CountryW-2a" name="Country" type="text" class="form-control required"> </div>
                                       </div>
                                       <div class="form-group row">
                                       <div class="col-sm-12">
                                       <label for="Position-2" class="block">Position</label>
                                       </div>
                                       <div class="col-sm-12">
                                       <input id="Position-2a" name="Position" type="text" class="form-control required"> </div>
                                       </div>
                                       </fieldset>
                                    </form>
                                 </section>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="styleSelector"></div>
