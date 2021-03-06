<div class="pcoded-content">
   <div class="page-header card">
      <div class="row align-items-end">
         <div class="col-lg-8">
            <div class="page-header-title">
               <i class="feather icon-clipboard bg-c-blue"></i>
               <div class="d-inline">
                  <h5>Budget</h5>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="page-header-breadcrumb">
               <ul class=" breadcrumb breadcrumb-title">
                  <li class="breadcrumb-item">
                     <a href="index.html"><i class="feather icon-home"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="#!">Budget</a></li>
                  <li class="breadcrumb-item">
                     <a href="#!">Money In</a>
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
                        <div class="card-header">
                           <h5>Money In</h5>
                        </div>
                        <form method="post" action="<?= site_url('Budget/money_out_save') ?>">
                           <div class="card-block">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Groceries</label>
                                       <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                                       <input type="text" name="groceries" placeholder="Groceries" class="form-control" style="border-radius: 20px;">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Transpotation</label>
                                       <input type="text" name="transpotation" placeholder="Transpotation" class="form-control" style="border-radius: 20px;">
                                    </div>
                                 </div>

                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Utilities</label>
                                       <input type="text" name="utilities" placeholder="Utilities" class="form-control" style="border-radius: 20px;">
                                    </div>
                                 </div>

                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Dining,Traveling,entertainment</label>
                                       <input type="text" name="dining_traveling" placeholder="Dining,Traveling,entertainment" class="form-control" style="border-radius: 20px;">
                                    </div>
                                 </div>

                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Education</label>
                                       <input type="text" name="education" placeholder="Education" class="form-control" style="border-radius: 20px;">
                                    </div>
                                 </div>

                               

                              </div>
                              <button style="border-radius: 20px;background-image: linear-gradient(to right, #26b0d1 , #3b62ab);" type="submit" class="btn btn-primary">
                                 <i class="fa fa-money"></i>
                              Save Money In</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="styleSelector"></div>
      <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Edit House Plan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-header">
                           <h5>House Plan</h5>
                        </div>
                        <form method="post" action="<?= site_url('Financial_goal/update_home_plan') ?>">
                           <div class="card-block">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Groceries</label>
                                       <input type="hidden" name="id" id="id" value="<?= $_SESSION['id'] ?>">
                                       <input type="text" name="loan_amount" placeholder="Loan Amount" id="loan_amount" class="form-control" style="border-radius: 20px;">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Deposit</label>
                                       <input type="text" name="deposit" id="deposit" placeholder="Deposit" class="form-control" style="border-radius: 20px;">
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Annual Intrest Rate</label>
                                       <input type="text" name="annual_intrest" id="annual_intrest_rate" placeholder="Annual Intrest Rate" class="form-control"style="border-radius: 20px;">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Loan Term</label>
                                       <input type="text" name="loan_term" id="loan_term" placeholder="Loan Term" class="form-control" style="border-radius: 20px;">
                                    </div>
                                 </div>
                              </div>
                              <button style="border-radius: 20px;background-image: linear-gradient(to right, #26b0d1 , #3b62ab);" type="submit" class="btn btn-primary">
                                    <i class="fa fa-home"></i>
                              Update House Plan</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <script>
                $(document).ready(function(){
                    $("#btn_edit").click(function(){
                     
                      var id =$(this).data('id');
                      var loan_amount =$(this).data('loan_amount');
                      var deposit =$(this).data('deposit');
                      var annual_intrest_rate =$(this).data('annual_intrest_rate');
                      var loan_term =$(this).data('loan_term');
                      var payment_frequency =$(this).data('payment_frequency');

                      $("#id").val(id);
                      $("#loan_amount").val(loan_amount);
                      $("#deposit").val(deposit);
                      $("#annual_intrest_rate").val(annual_intrest_rate);
                      $("#loan_term").val(loan_term);
                      $("#payment_frequency").val(payment_frequency).trigger('change');
                      $("#edit_modal").modal('show');  



                    })

                })
            </script>
         </div>
      </div>
   </div>
</div>