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
                        <form method="post" action="<?= site_url('Budget/money_in_save') ?>">
                           <div class="card-block">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Paycheck</label>
                                       <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                                       <input type="text" name="paycheck" placeholder="Paycheck" class="form-control" style="border-radius: 20px;">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Additional Amount</label>
                                       <input type="text" name="additional_amount" placeholder="Additional Amount" class="form-control" style="border-radius: 20px;">
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
                  <table class="table table-hover">
                    <thead class="text-center">
                      <tr>
                        <th>S No</th>
                        <th>Money In</th>
                        <th>Additional Amount</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php
                     $count = 1;   
                     foreach($money_in as $money): ?>
                        <tr>
                          <td><?= $count++ ?></td>
                          <td><?= $money->paycheck ?></td>
                          <td><?= $money->additional_income ?></td>
                          <td>
                            <button class="btn btn-primary btn-sm edit" style="border-radius: 10px;background-image: linear-gradient(to right, #26b0d1 , #3b62ab);" data-id="<?= $money->id ?>" data-paycheck="<?= $money->paycheck ?>" data-additional_income="<?= $money->additional_income ?>">
                            <i class="fa fa-edit"></i>
                          </button>
                        </td>  
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div id="styleSelector"></div>
      <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Edit Money In <i class="fa fa-money"></i></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-header">
                           <h5>Update Money In <i class="fa fa-money"></i></h5>
                        </div>
                        <form method="post" action="<?= site_url('Financial_goal/update_home_plan') ?>">
                           <div class="card-block">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Paycheck</label>
                                       <input type="hidden" name="id" id="id" value="<?= $_SESSION['id'] ?>">
                                       <input type="text" name="paycheck" placeholder="Loan Amount" id="paycheck" class="form-control" style="border-radius: 20px;">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Additional Amount</label>
                                       <input type="text" name="additional_income" id="additional_income" placeholder="Deposit" class="form-control" style="border-radius: 20px;">
                                    </div>
                                 </div>
                              </div>
                            
                              <button style="border-radius: 20px;" type="submit" class="btn btn-primary">
                                    <i class="fa fa-home"></i>
                              Update Money In</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <script>
                $(document).ready(function(){
                    $(".edit").click(function(){
                     
                      var id =$(this).data('id');
                      var paycheck =$(this).data('paycheck');
                      var additional_income =$(this).data('additional_income');

                      $("#id").val(id);
                      $("#paycheck").val(paycheck);
                      $("#additional_income").val(additional_income);
                      $("#edit_modal").modal('show');
                    })

                })
            </script>
         </div>
      </div>
   </div>
</div>