<div class="pcoded-content">
                     <div class="page-header card">
                        <div class="row align-items-end">
                           <div class="col-lg-8">
                              <div class="page-header-title">
                                 <i class="feather icon-user bg-c-blue"></i>
                                 <div class="d-inline">
                                    <h5>Manage Users</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="page-header-breadcrumb">
                                 <ul class=" breadcrumb breadcrumb-title">
                                    <li class="breadcrumb-item">
                                       <a href="#"><i class="feather icon-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
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
                                   
                                    <div class="col-xl-12">
                                       <div class="card proj-progress-card">
                                          <div class="card-block">
                                             <div class="row">
                                                <div class="col-xl-3 col-md-6">
                                                   <h6>Expire Accounts</h6>
                                                   <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                                                   <div class="progress">
                                                      <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                   </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                   <h6>User Goals</h6>
                                                   <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                                                   <div class="progress">
                                                      <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                                   </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                   <h6>Renewal Accounts</h6>
                                                   <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                                                   <div class="progress">
                                                      <div class="progress-bar bg-c-green" style="width:85%"></div>
                                                   </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                   <h6>Pending Accounts</h6>
                                                   <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                                                   <div class="progress">
                                                      <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>


                                    <div class="col-md-12">
                                       <div class="card table-card">
                                          <div class="card-header">
                                             <h5>Approval Request</h5>
                                             <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                   <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                   <li><i class="feather icon-maximize full-card"></i></li>
                                                   <li><i class="feather icon-minus minimize-card"></i></li>
                                                   <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                   <li><i class="feather icon-trash close-card"></i></li>
                                                   <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="card-block p-b-0">
                                             <div class="table-responsive">
                                                <table class="table table-hover m-b-0">
                                                   <thead>
                                                      <tr>
                                                         <th>Name</th>
                                                         <th>Email</th>
                                                         <th>Contact Details</th>
                                                         <th>Joining Details</th>
                                                         <th>Status</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <?php foreach($un_approve as $user): ?>
                                                      <tr>
                                                         <td><?= $user->first_name ?></td>
                                                         <td><?= $user->email ?></td>
                                                         <td><?= $user->phone ?></td>
                                                         <td><?= date("m-d-Y",strtotime($user->account_creation_date)) ?></td>
                                                         <td><a href="#" class="btn waves-effect waves-light hor-grd btn-grd-info ">Details</a></td>
                                                      </tr>
                                                      
                                                   </tbody>
                                                <?php endforeach; ?>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    
                                    <div class="col-xl-12 col-md-12">
                                       <div class="card latest-update-card">
                                          <div class="card-header">
                                             <h5>View Users</h5>
                                             <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                   <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                   <li><i class="feather icon-maximize full-card"></i></li>
                                                   <li><i class="feather icon-minus minimize-card"></i></li>
                                                   <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                   <li><i class="feather icon-trash close-card"></i></li>
                                                   <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                </ul>
                                             </div>
                                          </div>
                                          <div class="card-block">
                                             <div class="scroll-widget">
                                                <div class="latest-update-box">
                                                   <div class="row p-t-20 p-b-30">
                                                      <div class="col-auto text-right update-meta p-r-0">
                                                         <img src="<?= base_url() ?>/assets/jpg/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
                                                      </div>
                                                      <div class="col p-l-5">
                                                         <a href="#!">
                                                            <h6>Your Manager Posted.</h6>
                                                         </a>
                                                         <p class="text-muted m-b-0">Jonny michel</p>
                                                      </div>
                                                   </div>
                                                   <div class="row p-b-30">
                                                      <div class="col-auto text-right update-meta p-r-0">
                                                         <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                      </div>
                                                      <div class="col p-l-5">
                                                         <a href="#!">
                                                            <h6>You have 3 pending Task.</h6>
                                                         </a>
                                                         <p class="text-muted m-b-0">Hemilton</p>
                                                      </div>
                                                   </div>
                                                   <div class="row p-b-30">
                                                      <div class="col-auto text-right update-meta p-r-0">
                                                         <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                      </div>
                                                      <div class="col p-l-5">
                                                         <a href="#!">
                                                            <h6>New Order Received.</h6>
                                                         </a>
                                                         <p class="text-muted m-b-0">Hemilton</p>
                                                      </div>
                                                   </div>
                                                   <div class="row p-b-30">
                                                      <div class="col-auto text-right update-meta p-r-0">
                                                         <img src="<?= base_url() ?>/assets/jpg/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
                                                      </div>
                                                      <div class="col p-l-5">
                                                         <a href="#!">
                                                            <h6>Your Manager Posted.</h6>
                                                         </a>
                                                         <p class="text-muted m-b-0">Jonny michel</p>
                                                      </div>
                                                   </div>
                                                   <div class="row p-b-30">
                                                      <div class="col-auto text-right update-meta p-r-0">
                                                         <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                      </div>
                                                      <div class="col p-l-5">
                                                         <a href="#!">
                                                            <h6>You have 3 pending Task.</h6>
                                                         </a>
                                                         <p class="text-muted m-b-0">Hemilton</p>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-auto text-right update-meta p-r-0">
                                                         <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                      </div>
                                                      <div class="col p-l-5">
                                                         <a href="#!">
                                                            <h6>New Order Received.</h6>
                                                         </a>
                                                         <p class="text-muted m-b-0">Hemilton</p>
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
                  </div>