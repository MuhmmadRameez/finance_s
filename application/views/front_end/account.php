<section class="accountSec">
   <div class="container">
      <div class="row">
      	<div class="col-md-3"></div>
         <div class="col-md-6">
            <nav>
               <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Log In</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sign Up</a>                  
               </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <form id="loginform" class="form-horizontal" role="form" action="<?= site_url('Login/fetch_single') ?>" method="post">
                              
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <label for="email" class="control-label col-md-12 pl-0">Email</label>
                        <input id="login-username" type="email" required class="form-control col-md-12 borderlessInput" name="email" value="" placeholder="Enter Email">
                    </div>
                        
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <label for="email" class="control-label col-md-12 pl-0">Password</label>
                        <input id="login-password" type="password" required class="form-control col-md-12 borderlessInput" name="password" placeholder="***********">
                    </div>                    
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls accountBtn">
                          <button type="submit" id="btn-login" class="btn  ml-0">Login </a>
                        </div>

                    </div>   
                    <?php if ($this->session->flashdata('error_message')) { ?>
              <div class="alert alert-danger" id="error_message" style="font-weight: 900"> <?= $this->session->flashdata('error_message'); ?> </div>
          <?php } ?>                     
                    </form>
               </div>
               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                 <form id="signupform" action="<?= site_url("User/insert") ?>" method="post" class="form-horizontal" role="form">
                        
                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>
                          
                        <div class="form-group">
                            <label for="email" class="col-md-12 control-label">First Name</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control borderlessInput" name="first_name" placeholder="Enter First Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-12 control-label">Last Name</label>
                            <div class="col-md-12" >
                                <input type="text"  class="form-control borderlessInput" name="last_name" placeholder="Enter Last Name" required>
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <label for="firstname" class="col-md-12 control-label">Email Address</label>
                            <div class="col-md-12">
                                <input type="email" class="form-control borderlessInput" name="email" placeholder="Enter Email Address" required>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="phone" class="col-md-12 control-label">Phone Number</label>
                            <div class="col-md-12">
                                <input type="tel"x class="form-control borderlessInput" name="phone" placeholder="Phone Number" required>
                            </div>
                        </div>                       
                        <div class="form-group">
                            <label for="password" class="col-md-12 control-label">Password</label>
                            <div class="col-md-12">
                                <input type="password" class="form-control borderlessInput" name="password" placeholder="*************" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <!-- Button -->                                        
                            <div class="col-md-offset-3 col-md-12 accountBtn">
                                <button id="btn-signup" type="submit" class="btn  getBtn ml-0"><i class="icon-hand-right"></i> Sign Up</button>
                                
                            </div>
                        </div>
                    </form>
               </div>               
            </div>
         </div>
         <div class="col-md-3"></div>
      </div>
   </div>
   <script>
     
   </script>
</section>