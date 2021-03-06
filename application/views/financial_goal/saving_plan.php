 
 <div class="pcoded-content">
                     <div class="page-header card">
                        <div class="row align-items-end">
                           <div class="col-lg-8">
                              <div class="page-header-title">
                                 <i class="feather icon-clipboard bg-c-blue"></i>
                                 <div class="d-inline">
                                    <h5>Savings Goals</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="page-header-breadcrumb">
                                 <ul class=" breadcrumb breadcrumb-title">
                                    <li class="breadcrumb-item">
                                       <a href="index.html"><i class="feather icon-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Financial Goals</a></li>
                                    <li class="breadcrumb-item">
                                       <a href="#!">Savings Goals</a>
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
                                             <h5>Savings Plan</h5>
                                          </div>
                                          <form method="post" action="<?= site_url('Financial_goal/save_saving_plan') ?>">
                                          <div class="card-block">
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Saving Goals</label>
                                                      <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                                                      <input type="text" name="saving_goals" placeholder="Saving Goals" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Periods</label>
                                                      <input type="text" name="peroid" placeholder="Periods" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row">

                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Period Type</label>
                                                      <select class="form-control" name="period_type"style="border-radius: 20px;border:2px solid black;">
                                                        <option value="">Select Period Type</option>
                                                        <option value="m">Monthly</option>
                                                        <option value="y">Yearly</option>
                                                      </select>
                                                   </div>
                                                </div>


                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Per Period Amount To Saved</label>
                                                      <input type="text" name="saved" placeholder="Per Period Amount To Saved" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                             </div>
                                             <button style="border-radius: 20px;background-image: linear-gradient(to right, #26b0d1 , #3b62ab);" type="submit" class="btn btn-primary">Save Saving Plan</button>

                                          </div>
                                        </form>
                                       </div>
                                     
                                    </div>
                                    <div class="col-md-12 card">
                                        <table class="table table-borderd">
                                          <thead class="text-center">
                                            <tr>
                                              <th>S No</th>
                                              <th>Saving Goal</th>
                                              <th>Priod</th>
                                              <th>Period Type</th>
                                              <th>Per Period Amount To Save</th>
                                              <th>Action</th>
                                            </tr>
                                          </thead>
                                          <tbody class="text-center">
                                              <?php 
                                              $count = 1;
                                              foreach($record as $rec):?>
                                                  <tr>
                                                    <td><?= $count++ ?></td>
                                                    <td><?= number_format($rec->saving_goal)?></td>
                                                    <td><?= $rec->period?></td>
                                                    <td><?php 
                                                      if ($rec->period_type=="m") 
                                                      {
                                                        echo "Monthly";
                                                      }
                                                      else{
                                                        echo "Yearly";
                                                      }

                                                     ?></td>
                                                      
                                                    <td><?= number_format($rec->per_period_amount_to_saved)?></td>

                                                    <td>
                                                      <button class="btn btn-primary btn-sm edit" style="background-image: linear-gradient(to right, #26b0d1 , #3b62ab);"data-id="<?= $rec->id ?>" data-saving="<?= $rec->saving_goal ?>" data-period="<?= $rec->period ?>" data-period_type="<?= $rec->period_type ?>" data-per_period_amount_to_saved="<?= $rec->per_period_amount_to_saved ?>" >
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
                        </div>
                        <!-- Edit Modal -->
                        <div class="modal fade" id="edit_saving" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Plan Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="col-sm-12">
                                       <div class="card">
                                          <div class="card-header">
                                             <h5>Savings Plan</h5>
                                          </div>
                                          <form method="post" action="<?= site_url('Financial_goal/save_saving_plan') ?>">
                                          <div class="card-block">
                                             <div class="row">
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Saving Goals</label>
                                                      <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                                                      <input type="text" name="saving_goals" placeholder="Saving Goals" id="saving_goals" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Periods</label>
                                                      <input type="text" name="peroid" id="peroid" placeholder="Periods" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="row">

                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Period Type</label>
                                                      <select class="form-control" id="period_type" name="period_type"style="border-radius: 20px;border:2px solid black;">
                                                        <option value="m">Monthly</option>
                                                        <option value="y">Yearly</option>
                                                      </select>
                                                   </div>
                                                </div>


                                                <div class="col-md-6">
                                                   <div class="form-group">
                                                      <label>Amount To Saved</label>
                                                      <input type="text" name="saved" id="saved" placeholder="Per Period Amount To Saved" class="form-control" style="border-radius: 20px;">
                                                   </div>
                                                </div>
                                             </div>
                                             <button style="border-radius: 20px;" type="submit" class="btn btn-primary">Save Saving Plan</button>

                                          </div>
                                        </form>
                                       </div>
                                     
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Edit modal end -->
                        <div id="styleSelector"></div>
                     </div>
                    <script>
                          $(document).ready(function(){
                            $(".edit").click(function(){
                      var id = $(this).data('id');
                      var saving_goal = $(this).data('saving');
                     var period = $(this).data('period');
                     var period_type = $(this).data('period_type');
                     var saved = $(this).data('per_period_amount_to_saved');

                              $("#id").val(id);
                              $("#saving_goals").val(saving_goal);
                              $("#peroid").val(period);
                              $("#period_type").val(period_type).trigger('change');
                              $("#saved").val(saved);
                              

                              $("#edit_saving").modal('show');
                            })
                          })


                     </script>
                  </div>