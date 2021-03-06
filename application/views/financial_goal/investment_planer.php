<div class="pcoded-content">
   <div class="page-header card">
      <div class="row align-items-end">
         <div class="col-lg-8">
            <div class="page-header-title">
               <i class="fa fa-money bg-c-blue"></i>
               <div class="d-inline">
                  <h5>Investment Planner</h5>
               </div>
            </div>
         </div>
         <div class="col-lg-4">
            <div class="page-header-breadcrumb">
               <ul class=" breadcrumb breadcrumb-title">
                  <li class="breadcrumb-item">
                     <a href="index.html"><i class="feather icon-home"></i></a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?= site_url('Financial_goal/') ?>">Financial Goals</a></li>
                  <li class="breadcrumb-item">
                     <a href="#!">Finncial</a>
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
                     <form method="post" action="<?= site_url('Financial_goal/save_investment_plan') ?>">
                        <table class="table table-bordered table-hover" id="tab_logic">
                           <thead>
                              <tr>
                                 <th class="text-center"> # </th>
                                 <th class="text-center"> Per Period Contribution </th>
                                 <th class="text-center"> Period </th>
                                 <th class="text-center"> Intrest rate on investment </th>
                                 <th class="text-center"> Value of investment </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr id='addr0'>
                                 <td>1</td>
                                 <td>
                                    <input type="hidden" name="user_id[]" value="<?= $_SESSION['id'] ?>">
                                    <input type="number" style="border-radius: 20px;" name='contribution[]'  placeholder='Per Period Contribution' class="form-control"/>
                                 </td>
                                 <td><input type="number" style="border-radius: 20px;" name='period[]' placeholder='Period' class="form-control qty" step="0" min="0"/></td>
                                 <td><input type="number" style="border-radius: 20px;" name='intrsest[]' placeholder='Intrest rate on investment' class="form-control"/></td>
                                 <td><input type="number" style="border-radius: 20px;" name='investment[]' placeholder='Value of investment' class="form-control"/></td>
                              </tr>
                             
                              <tr id='addr1'></tr>
                           </tbody>
                           <tr>
                                 <td colspan="5">
                                       <div class="col-md-4">
                            <button type="submit" style="border-radius: 20px;background-image: linear-gradient(to right, #26b0d1 , #3b62ab);" class="btn btn-primary">
                              Save Record
                              <i class="fa fa-save"></i>
                              </button>
                        </div>
                                 </td>
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
         <div class="row">
            
             <div class="col-md-12">
               
               <table class="table table-bordered">
                  <thead class="text-center">
                     <tr>
                        <th>S No</th>
                        <th>Period Per Contribution</th>
                        <th>Periods</th>
                        <th>Intrest Rate On Investment</th>
                        <th>Value of intrest</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody class="text-center">
                     <?php 
                     $count = 1;
                     foreach($invest_planner as $planner): ?>
                        <tr>
                           <td><?= $count++ ?></td>
                           <td><?= $planner->per_period_contribution ?></td>
                           <td><?= $planner->periods ?></td>
                           <td><?= $planner->intrest_rate_on_investment ?></td>
                           <td><?= $planner->value_of_investment ?></td>
                           <td>
                              <button class="btn btn-primary btn-sm edit" style="background-image: linear-gradient(to right, #26b0d1 , #3b62ab);" data-id="<?= $planner->id ?>" data-per_period_contribution="<?= $planner->per_period_contribution  ?>"
                                 data-periods="<?= $planner->periods ?>" data-intrest_rate_on_investment="<?= $planner->intrest_rate_on_investment ?>" data-value_of_investment="<?= $planner->value_of_investment ?>"
                                 > 
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
        <div class="modal fade" id="edit_saving" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Investment Plan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="col-sm-12">
                                       <div class="card">
                                          <div class="card-header">
                                             <h5>Edit Investment Plan <i class="fa fa-bar-chart"></i></h5>
                                          </div>
                                          <form method="post" action="<?= site_url('Financial_goal/update_investment_plan') ?>">
                                          <div class="card-block">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label>Per Period Contribution   </label>
                                                      <input type="hidden" name="id" id="id">
                                                      <input type="text" name="contribution" id="contribution" placeholder="Saving Goals" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label>Period</label>
                                                      <input type="text" name="period" id="period" placeholder="Periods" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                             </div>

                                              <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label>Intrest rate on investment    </label>
                                                      <input type="text" name="intrsest" id="intrsest" placeholder="Saving Goals" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                             </div>

                                              <div class="row">
                                                <div class="col-md-12">
                                                   <div class="form-group">
                                                      <label>Value of investment</label>
                                                      <input type="text" name="investment" placeholder="Saving Goals" id="investment" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                             </div>
                                             <button style="border-radius: 20px;" type="submit" class="btn btn-primary">
                                             <i class="fa fa-edit"></i>
                                             Update Investment Planner
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
                      var per_period_contribution = $(this).data('per_period_contribution');
                     var periods = $(this).data('periods');
                     var intrest_rate_on_investment = $(this).data('intrest_rate_on_investment');
                     var value_of_investment = $(this).data('value_of_investment');

                              $("#id").val(id);
                              $("#contribution").val(per_period_contribution);
                              $("#period").val(periods);
                              $("#intrsest").val(intrest_rate_on_investment);
                              $("#investment").val(value_of_investment);
                              

                              $("#edit_saving").modal('show');
                            })
                          })


                     </script>
      </div>
   </div>
</div>