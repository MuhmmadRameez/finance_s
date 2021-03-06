 <style>
    #profile-upload{
    background-image:url('');
    background-size:cover;
    background-position: center;
    height: 250px; width: 250px;
    border: 1px solid #bbb;
    position:relative;
  border-radius:250px;
  overflow:hidden;
}
#profile-upload:hover input.upload{
  display:block;
}
#profile-upload:hover .hvr-profile-img{
  display:inline-block;
 }
#profile-upload .fa{   margin: auto;
    position: absolute;
    bottom: -4px;
    left: 0;
    text-align: center;
    right: 0;
    padding: 6px;
   opacity:1;
  transition:opacity 1s linear;
   -webkit-transform: scale(.75); 
 
 
}
#profile-upload:hover .fa{
   opacity:1;
   -webkit-transform: scale(1); 
}
#profile-upload input.upload {
    z-index:1;
    left: 0;
    margin: 0;
    bottom: 0;
    top: 0;
    padding: 0;
    opacity: 0;
    outline: none;
    cursor: pointer;
    position: absolute;
    background:#ccc;
    width:100%;
    display:none;
}

#profile-upload .hvr-profile-img {
  width:100%;
  height:100%;
  display: none;
  position:absolute;
  vertical-align: middle;
  position: relative;
  background: transparent;
 }
#profile-upload .fa:after {
    content: "";
    position:absolute;
    bottom:0; left:0;
    width:100%; height:0px;
    background:rgba(0,0,0,0.3);
    z-index:-1;
    transition: height 0.3s;
    }

#profile-upload:hover .fa:after { height:100%; }
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
                                    <li class="breadcrumb-item">
                                       <a href="index.html"><i class="feather icon-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">
                                       <a href="#!">Forms Wizard</a>
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
                                             <h5>Form Wizard With Validation</h5>
                                             <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                          </div>
                                          <div class="card-block">
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <div id="wizard">
                                                      <section>
                                                         <form class="wizard-form" id="example-advanced-form" action="#">
                                                            <h3> Registration </h3>
                                                            <div id='profile-upload'>
<div class="hvr-profile-img"><input type="file" name="logo" id='getval'  class="upload w180" title="Dimensions 180 X 180" id="imag"></div>
  <i class="fa fa-camera"></i>
  </div>
                                                            <fieldset>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="userName-2" class="block">User name *</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="userName-2" name="userName" type="text" class="required form-control">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="email-2" class="block">Email *</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="email-2" name="email" type="email" class="required form-control">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="password-2" class="block">Password *</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="password-2" name="password" type="password" class="form-control required">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="confirm-2" class="block">Confirm Password *</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="confirm-2" name="confirm" type="password" class="form-control required">
                                                                  </div>
                                                               </div>
                                                            </fieldset>
                                                            <h3> General information </h3>
                                                            <fieldset>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="name-2" class="block">First name *</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="name-2" name="name" type="text" class="form-control required">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="surname-2" class="block">Last name *</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="surname-2" name="surname" type="text" class="form-control required">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="phone-2" class="block">Phone #</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="phone-2" name="phone" type="number" class="form-control required phone">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="date" class="block">Date Of Birth</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="date" name="Date Of Birth" type="text" class="form-control required date-control">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">Select Country</div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <select class="form-control required">
                                                                        <option>Select State</option>
                                                                        <option>Gujarat</option>
                                                                        <option>Kerala</option>
                                                                        <option>Manipur</option>
                                                                        <option>Tripura</option>
                                                                        <option>Sikkim</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                            </fieldset>
                                                            <h3> Education </h3>
                                                            <fieldset>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="University-2" class="block">University</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="University-2" name="University" type="text" class="form-control required">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="Country-2" class="block">Country</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="Country-2" name="Country" type="text" class="form-control required">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="Degreelevel-2" class="block">Degree level #</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="Degreelevel-2" name="Degree level" type="text" class="form-control required phone">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="datejoin" class="block">Date Join</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="datejoin" name="Date Of Birth" type="text" class="form-control required">
                                                                  </div>
                                                               </div>
                                                            </fieldset>
                                                            <h3> Work experience </h3>
                                                            <fieldset>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="Company-2" class="block">Company:</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="Company-2" name="Company:" type="text" class="form-control required">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="CountryW-2" class="block">Country</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="CountryW-2" name="Country" type="text" class="form-control required">
                                                                  </div>
                                                               </div>
                                                               <div class="form-group row">
                                                                  <div class="col-md-4 col-lg-2">
                                                                     <label for="Position-2" class="block">Position</label>
                                                                  </div>
                                                                  <div class="col-md-8 col-lg-10">
                                                                     <input id="Position-2" name="Position" type="text" class="form-control required">
                                                                  </div>
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
                   <script>
                     document.getElementById('getval').addEventListener('change', readURL, true);
function readURL(){
    var file = document.getElementById("getval").files[0];
    var reader = new FileReader();
    reader.onloadend = function(){
        document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";        
    }
    if(file){
        reader.readAsDataURL(file);
    }else{
    }
}
                  </script>
                  <div id="styleSelector"></div>
                 
               </div>