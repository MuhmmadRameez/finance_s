<section class="accountSec">
   <div class="container">
      <div class="row">
      	<div class="col-md-3"></div>
         <div class="col-md-6">
            <nav>
               <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Number Verification</a>
                                
               </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <form id="loginform" class="form-horizontal" role="form" action="<?= site_url('Login/number_check') ?>" method="post">
                              
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                         <input type="hidden" name="id" value="<?= $user_id ?>">
                        <label for="email" class="control-label col-md-12 pl-0">Enter Number</label>
                        <input id="login-username" type="number"  required class="form-control col-md-12 borderlessInput" name="number" value="" placeholder="Enter Valid Mobile Number">
                    </div>                
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls accountBtn">
                          <button type="submit" id="btn-login" class="btn  ml-0">Check Number</a>
                        </div>
                    </div>                        
                    </form>
               </div>
              <?php if ($this->session->flashdata('error_message')) { ?>
              <div class="alert alert-danger" id="error_message" style="font-weight: 900"> <?= $this->session->flashdata('error_message'); ?> </div>
          <?php } ?>
               
               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                
               </div>               
            </div>
         </div>
         <div class="col-md-3"></div>
      </div>
   </div>
</section>
<script>
  window.setTimeout(function() {
    $("#error_message").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>