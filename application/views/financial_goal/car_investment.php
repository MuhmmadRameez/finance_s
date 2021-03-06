<div class="pcoded-content">
   <div class="page-header card">
      <div class="row align-items-end">
         <div class="col-lg-8">
            <div class="page-header-title">
               <i class="fa fa-car bg-c-blue"></i>
               <div class="d-inline">
                  <h5>Car Purchase</h5>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="page-header-breadcrumb">
               <ul class=" breadcrumb breadcrumb-title">
                  <li class="breadcrumb-item">
                     <a href="<?= site_url('Dashboard/') ?>"><i class="fa fa-home"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?= site_url('Financial_goal/') ?>">Financial Goals</a></li>
                  <li class="breadcrumb-item">
                     <a href="#!">Car Purchase</a>
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
                  <div class="col-md-12">
                     <form method="post" action="<?= site_url('Financial_goal/save_car_purchasing') ?>">
                        <table class="table table-bordered table-hover" id="tab_logic">
                           <thead>
                              <tr>
                                 <th class="text-center"> # </th>
                                 <th class="text-center"> Loan Amount </th>
                                 <th class="text-center"> Annual Intrest Rate </th>
                                 <th class="text-center"> Loan Term </th>
                                 <th class="text-center"> Payment Frequency </th>
                                 <th class="text-center"> Residual Value </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr id='addr0'>
                                 <td>1</td>
                                 <td>
                                    <input type="hidden" name="user_id[]" value="<?= $_SESSION['id'] ?>">
                                    <input type="text" style="border-radius: 20px;" name='loan[]'  placeholder='Loan Amount' class="form-control"/>
                                 </td>
                                 <td><input type="text" style="border-radius: 20px;" name='anual[]' placeholder='Annual Intrest Rate' class="form-control qty" step="0" min="0"/></td>
                                 <td><input type="text" style="border-radius: 20px;" name='term[]' placeholder='Intrest rate on investment' class="form-control price"/></td>
                                 <td>
                                    <select class="form-control" name="frequency[]">
                                       <option value="">Select Frequency</option>
                                       <option value="m">Monthly</option>
                                       <option value="y">Yearly</option>
                                    </select>
                                 </td>

                                  <td><input type="text" style="border-radius: 20px;" name='value[]' placeholder='Residual Value' class="form-control"/></td>
                              </tr>
                              <tr id='addr1'></tr>
                           </tbody>
                            <tr>
                                 <td colspan="6"><button type="submit" class="btn btn-primary" style="border-radius: 20px;background-image: linear-gradient(to right, #26b0d1 , #3b62ab);">
                              Save Record
                              <i class="fa fa-save"></i>
                              </button></td>
                              </tr>
                              
                        </table>
                  </div>
                  </form>
                  <div class="row clearfix">
                     <div class="col-md-12" style="margin-right: 25%;">
                        <button id="add_row" type="button" class="btn btn-primary pull-left" style="border-radius:20px;background-image: linear-gradient(to right, #26b0d1 , #3b62ab);">Add Row
                        <i class="fa fa-plus"></i>
                        </button>
                        <button id='delete_row' type="button" class="pull-right  btn btn-danger" style="border-radius:20px;background-image: linear-gradient(to right, #26b0d1 , #3b62ab);">
                        <i class="fa fa-trash"></i>
                        Delete Row</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
           </div>
           <?php if(!empty($car_investment)){ ?>
         <div class="row">
             <div class="col-md-12">
               
               <table class="table table-bordered table-stripped">
                  <thead class="text-center">
                     <tr>
                        <th>S No</th>
                        <th>Period Per Contribution</th>
                        <th>Periods</th>
                        <th>Intrest Rate On Investment</th>
                        <th>Value of intrest</th>
                        <th>Residual value</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody class="text-center">
                     <?php 
                     $count = 1;
                     foreach($car_investment as $car): ?>
                        <tr>
                           <td><?= $count++ ?></td>
                           <td><?= $car->loan_amount ?></td>
                           <td><?= $car->annula_intrest_rate ?></td>
                           <td><?= $car->loan_term ?></td>
                           <td>
                              <?php if($car->payment_frequency=='m'){ ?>
                                 Monthly
                              <?php } else{?>
                                 Yearly
                              <?php } ?>
                           </td>
                           <td><?= $car->resedual_value ?></td>
                           <td><button class="class btn btn-primary btn-sm edit" style="background-image: linear-gradient(to right, #26b0d1 , #3b62ab);"
                              data-id="<?=$car->id ?>" data-loan="<?= $car->loan_amount ?>"
                              data-anual="<?= $car->annula_intrest_rate ?>"data-term="<?= $car->loan_term ?>" data-frequency="<?= $car->payment_frequency ?>"
                                 data-value="<?= $car->resedual_value ?>">
                              <i class="fa fa-edit"></i>
                           </button></td>
                        </tr>

                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div> 
      <?php } ?>
      </div>
       <div class="modal fade" id="edit_saving" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Car Investment</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="col-sm-12">
                                       <div class="card">
                                          <div class="card-header">
                                             <h5>Edit Car Investment <i class="fa fa-car"></i></h5>
                                          </div>
                                          <form method="post" action="<?= site_url('Financial_goal/update_car_investment_plan') ?>">
                                          <div class="card-block">
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Loan Amount</label>
                                                      <input type="hidden" name="id" id="id">
                                                      <input type="text" name="loan" id="loan" placeholder="Saving Goals" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Annual Intrest Rate</label>
                                                      <input type="text" name="anual" id="anual" placeholder="Periods" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                             </div>

                                              <div class="row">
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Loan Term </label>
                                                      <input type="text" name="term" id="term" placeholder="Saving Goals" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Payment Frequency</label>
                                                      <select class="form-control" id="frequency" name="frequency">
                                                         <option value="m">Monthly</option>
                                                         <option value="y">Yearly</option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>

                                              <div class="row">
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Residual Value</label>
                                                      <input type="text" name="value" placeholder="Saving Goals" id="value" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                             </div>
                                             <button style="border-radius: 20px;background-image: linear-gradient(to right, #26b0d1 , #3b62ab);" type="submit" class="btn btn-primary">
                                             <i class="fa fa-edit"></i>
                                             Update Car Investment
                                          </button>

                                          </div>
                                        </form>
                                       </div>
                                     
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
      <div id="styleSelector"></div>
      
         
          
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
      <script>
                          $(document).ready(function(){
                            $(".edit").click(function(){
                              var id = $(this).data('id');
                              var loan = $(this).data('loan');
                              var anual = $(this).data('anual');
                              var term = $(this).data('term');
                              var frequency = $(this).data('frequency');
                              var value = $(this).data('value');

                              $("#id").val(id);
                              $("#loan").val(loan);
                              $("#anual").val(anual);
                              $("#term").val(term);
                              $("#frequency").val(frequency).trigger('change');
                              $("#value").val(value);

                              $("#edit_saving").modal('show');
                            })
                          })


                     </script>
      </div>
   </div>
</div>