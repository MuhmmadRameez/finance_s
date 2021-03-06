 <div class="pcoded-content">
                     <div class="page-header card">
                        <div class="row align-items-end">
                           <div class="col-lg-8">
                              <div class="page-header-title">
                                 <i class="feather icon-clipboard bg-c-blue"></i>
                                 <div class="d-inline">
                                    <h5>Basic Profile</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="page-header-breadcrumb">
                                 <ul class=" breadcrumb breadcrumb-title">
                                    <li class="breadcrumb-item">
                                       <a href="index.html"><i class="feather icon-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
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
                                    <div class="col-sm-8" style="margin:auto;">
                                       <div class="card">
                                          <div class="card-block">
                                             <h4 class="sub-title">Basic Profile</h4>
                                             <form method="post" action="<?= site_url('Basic_profile/insert') ?>">
                                                <div class="form-group row">
                                                   <label class="col-sm-4 col-form-label">Own Information</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" class="form-control col-md-12" placeholder="Own Information" name="own_information" id="own_information">
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-4 col-form-label">Dependants Information</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" class="form-control col-md-12" placeholder="Dependants Information" name="dependants_information" id="dependants_information">
                                                   </div>
                                                </div>

                                                   <div class="form-group row">
                                                   <label class="col-sm-4 col-form-label">Education</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" class="form-control col-md-12" placeholder="Education" name="education" id="education">
                                                   </div>
                                                </div>

                                                   <div class="form-group row">
                                                   <label class="col-sm-4 col-form-label">Work history</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" class="form-control col-md-12" placeholder="Word History" name="work_history" id="work_history">
                                                   </div>
                                                </div>
                                              
                                               <div class="form-group row">
                                                  
                                                   <div class="col-sm-8" style="margin-left: 35%;">
                                                     <button style="margin: auto" type="submit" class="btn btn-primary">Save Record
                                                      <i class="fa fa-save"></i>
                                                     </button>
                                                   </div>
                                                </div>
                                              
                                              
                                              
                                              
                                            
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="styleSelector"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>