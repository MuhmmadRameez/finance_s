<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-up-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:10:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Finance Application | Signup</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="css/waves.min.css" type="text/css" media="all"> <link rel="stylesheet" type="text/css" href="css/feather.css">

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/themify-icons.css">

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/style.css"><link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/pages.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/toaster.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?= base_url() ?>/assets/js/signup_validation.js"></script>
</head>
<body themebg-pattern="theme1">

<div class="theme-loader">
<div class="loader-track">
<div class="preloader-wrapper">
<div class="spinner-layer spinner-blue">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-red">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-yellow">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-green">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
</div>
</div>
</div>

<section class="login-block">

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">


<div class="text-center">
<img src="<?= base_url() ?>/assets/png/logo.png" alt="logo.png">
</div>
<div class="auth-box card">
<div class="card-block">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-center txt-primary">Sign up</h3>
</div>
</div>

<p class="text-muted text-center p-b-5">Sign up with your regular account</p>
<div class="form-group form-primary">
<form method="post" action="<?= site_url("User/insert") ?>" id="signup_form">
<input type="text" name="first_name" id="first_name" placeholder="Firstname" class="form-control" required="" >
<span class="form-bar"></span>
<label class="float-label"></label>
</div>
<div class="form-group form-primary">
<input type="text" placeholder="Lastname" id="last_name" name="last_name" class="form-control" required="" >
<strong><span class="last_name text-danger"></span></strong>
<!-- <label class="float-label">Lastname</label> -->
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group form-primary">
<input type="email" placeholder="Email" name="email" id="email" class="form-control" required="" >
<span id="email_result"></span>
<!-- <label class="float-label"></label> -->
</div>

<div class="form-group form-primary">
<input type="text" name="phone" placeholder="Phone" id="phone" class="form-control"  required="">
<span class="phone_error text-danger"></span>
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-primary">
<input type="password" placeholder="Password" name="password" id="password" class="form-control" required="" >
<span class="password_error text-danger"></span>
<!-- <label class="float-label">Password</label> -->
</div>
</div>

</div>
<div class="row m-t-25 text-left">
 <div class="col-md-12">
<div class="checkbox-fade fade-in-primary">
<label>
<input type="checkbox" value="">
<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
<span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
</label>
</div>
</div>
<div class="col-md-12">
<div class="checkbox-fade fade-in-primary">
<label>

</div>
</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" id="btn_sub" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
</form>
</div>
</div>
<hr />

</div>
</div>


</div>

</div>

</div>

</section>

<!-- <script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/jquery.min.js"></script> -->
<script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/jquery-ui.min.js"></script>
<script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/popper.min.js"></script>
<script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>

<script src="js/waves.min.js" type="a371f3c3996957007cacd73a-text/javascript"></script>

<script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/jquery.slimscroll.js"></script>

<script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/modernizr.js"></script>
<script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/css-scrollbars.js"></script>

<script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/i18next.min.js"></script>
<script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/i18nextxhrbackend.min.js"></script>
<script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/i18nextbrowserlanguagedetector.min.js"></script>
<script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/jquery-i18next.min.js"></script>
<script type="a371f3c3996957007cacd73a-text/javascript" src="<?= base_url() ?>/assets/js/common-pages.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="a371f3c3996957007cacd73a-text/javascript"></script>
<script type="a371f3c3996957007cacd73a-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="<?= base_url() ?>/assets/js/rocket-loader.min.js" data-cf-settings="a371f3c3996957007cacd73a-|49" defer=""></script></body>

<script>
	/* file */
"function"!=typeof Object.create&&(Object.create=function(t){function o(){}return o.prototype=t,new o}),function(t,o){"use strict";var i={_positionClasses:["bottom-left","bottom-right","top-right","top-left","bottom-center","top-center","mid-center"],_defaultIcons:["success","error","info","warning"],init:function(o){this.prepareOptions(o,t.toast.options),this.process()},prepareOptions:function(o,i){var s={};"string"==typeof o||o instanceof Array?s.text=o:s=o,this.options=t.extend({},i,s)},process:function(){this.setup(),this.addToDom(),this.position(),this.bindToast(),this.animate()},setup:function(){var o="";if(this._toastEl=this._toastEl||t("<div></div>",{"class":"jq-toast-single"}),o+='<span class="jq-toast-loader"></span>',this.options.allowToastClose&&(o+='<span class="close-jq-toast-single">&times;</span>'),this.options.text instanceof Array){this.options.heading&&(o+='<h2 class="jq-toast-heading">'+this.options.heading+"</h2>"),o+='<ul class="jq-toast-ul">';for(var i=0;i<this.options.text.length;i++)o+='<li class="jq-toast-li" id="jq-toast-item-'+i+'">'+this.options.text[i]+"</li>";o+="</ul>"}else this.options.heading&&(o+='<h2 class="jq-toast-heading">'+this.options.heading+"</h2>"),o+=this.options.text;this._toastEl.html(o),this.options.bgColor!==!1&&this._toastEl.css("background-color",this.options.bgColor),this.options.textColor!==!1&&this._toastEl.css("color",this.options.textColor),this.options.textAlign&&this._toastEl.css("text-align",this.options.textAlign),this.options.icon!==!1&&(this._toastEl.addClass("jq-has-icon"),-1!==t.inArray(this.options.icon,this._defaultIcons)&&this._toastEl.addClass("jq-icon-"+this.options.icon))},position:function(){"string"==typeof this.options.position&&-1!==t.inArray(this.options.position,this._positionClasses)?"bottom-center"===this.options.position?this._container.css({left:t(o).outerWidth()/2-this._container.outerWidth()/2,bottom:20}):"top-center"===this.options.position?this._container.css({left:t(o).outerWidth()/2-this._container.outerWidth()/2,top:20}):"mid-center"===this.options.position?this._container.css({left:t(o).outerWidth()/2-this._container.outerWidth()/2,top:t(o).outerHeight()/2-this._container.outerHeight()/2}):this._container.addClass(this.options.position):"object"==typeof this.options.position?this._container.css({top:this.options.position.top?this.options.position.top:"auto",bottom:this.options.position.bottom?this.options.position.bottom:"auto",left:this.options.position.left?this.options.position.left:"auto",right:this.options.position.right?this.options.position.right:"auto"}):this._container.addClass("bottom-left")},bindToast:function(){var t=this;this._toastEl.on("afterShown",function(){t.processLoader()}),this._toastEl.find(".close-jq-toast-single").on("click",function(o){o.preventDefault(),"fade"===t.options.showHideTransition?(t._toastEl.trigger("beforeHide"),t._toastEl.fadeOut(function(){t._toastEl.trigger("afterHidden")})):"slide"===t.options.showHideTransition?(t._toastEl.trigger("beforeHide"),t._toastEl.slideUp(function(){t._toastEl.trigger("afterHidden")})):(t._toastEl.trigger("beforeHide"),t._toastEl.hide(function(){t._toastEl.trigger("afterHidden")}))}),"function"==typeof this.options.beforeShow&&this._toastEl.on("beforeShow",function(){t.options.beforeShow()}),"function"==typeof this.options.afterShown&&this._toastEl.on("afterShown",function(){t.options.afterShown()}),"function"==typeof this.options.beforeHide&&this._toastEl.on("beforeHide",function(){t.options.beforeHide()}),"function"==typeof this.options.afterHidden&&this._toastEl.on("afterHidden",function(){t.options.afterHidden()})},addToDom:function(){var o=t(".jq-toast-wrap");if(0===o.length?(o=t("<div></div>",{"class":"jq-toast-wrap"}),t("body").append(o)):(!this.options.stack||isNaN(parseInt(this.options.stack,10)))&&o.empty(),o.find(".jq-toast-single:hidden").remove(),o.append(this._toastEl),this.options.stack&&!isNaN(parseInt(this.options.stack),10)){var i=o.find(".jq-toast-single").length,s=i-this.options.stack;s>0&&t(".jq-toast-wrap").find(".jq-toast-single").slice(0,s).remove()}this._container=o},canAutoHide:function(){return this.options.hideAfter!==!1&&!isNaN(parseInt(this.options.hideAfter,10))},processLoader:function(){if(!this.canAutoHide()||this.options.loader===!1)return!1;var t=this._toastEl.find(".jq-toast-loader"),o=(this.options.hideAfter-400)/1e3+"s",i=this.options.loaderBg,s=t.attr("style")||"";s=s.substring(0,s.indexOf("-webkit-transition")),s+="-webkit-transition: width "+o+" ease-in;                       -o-transition: width "+o+" ease-in;                       transition: width "+o+" ease-in;                       background-color: "+i+";",t.attr("style",s).addClass("jq-toast-loaded")},animate:function(){var t=this;if(this._toastEl.hide(),this._toastEl.trigger("beforeShow"),"fade"===this.options.showHideTransition.toLowerCase()?this._toastEl.fadeIn(function(){t._toastEl.trigger("afterShown")}):"slide"===this.options.showHideTransition.toLowerCase()?this._toastEl.slideDown(function(){t._toastEl.trigger("afterShown")}):this._toastEl.show(function(){t._toastEl.trigger("afterShown")}),this.canAutoHide()){var t=this;o.setTimeout(function(){"fade"===t.options.showHideTransition.toLowerCase()?(t._toastEl.trigger("beforeHide"),t._toastEl.fadeOut(function(){t._toastEl.trigger("afterHidden")})):"slide"===t.options.showHideTransition.toLowerCase()?(t._toastEl.trigger("beforeHide"),t._toastEl.slideUp(function(){t._toastEl.trigger("afterHidden")})):(t._toastEl.trigger("beforeHide"),t._toastEl.hide(function(){t._toastEl.trigger("afterHidden")}))},this.options.hideAfter)}},reset:function(o){"all"===o?t(".jq-toast-wrap").remove():this._toastEl.remove()},update:function(t){this.prepareOptions(t,this.options),this.setup(),this.bindToast()}};t.toast=function(t){var o=Object.create(i);return o.init(t,this),{reset:function(t){o.reset(t)},update:function(t){o.update(t)}}},t.toast.options={text:"",heading:"",showHideTransition:"fade",allowToastClose:!0,hideAfter:3e3,loader:!0,loaderBg:"#9EC600",stack:5,position:"bottom-left",bgColor:!1,textColor:!1,textAlign:"left",icon:!1,beforeShow:function(){},afterShown:function(){},beforeHide:function(){},afterHidden:function(){}}}(jQuery,window,document);



/* Starts from here */
<?php if ($this->session->flashdata('error_msg')):?>
$(document).ready(function(){
  $.toast({
  heading: 'Error',
  text: '<?= $this->session->flashdata('error_msg');?>',
  icon: 'error',
  loader: true,
  loaderBg: '#fff',
  showHideTransition: 'plain',
  hideAfter: 3000,
  position: {
    left: 100,
    top: 30
  }
})
})
<?php endif; ?>

$("#success").click(function(){
  $.toast({
    heading:'Success',
    text:'Logged In',
    icon:'success',
    loader: true,
    loaderBg: '#fff',
    showHideTransition: 'fade',
    hideAfter: 3000,
    allowToastClose: false,
    position: {
      left:100,
      top:30
    }
  })
})

$("#info").click(function(){
  $.toast({
    heading:'Info',
    text:'Important information',
    icon:'info',
    loader: true,
    loaderBg: '#fff',
    showHideTransition: 'slide',
    hideAfter: 3000,
    allowToastClose: false,
    position: {
      left:100,
      top:30
    }
  })
})

$("#warning").click(function(){
  $.toast({
    heading:'Warning',
    text:'You cant do that!',
    icon:'warning',
    loader:false,
    hideAfter: false,
    allowToastClose: true,
    position: {
      left:100,
      top:30
    }
  })
})




</script>



<script>  
 $(document).ready(function(){  
      $('#email').change(function(){  
           var email = $('#email').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo site_url('User/check_email_avalibility'); ?>",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                          $('#email_result').html(data);  
                     }  
                });  
           }  
      });  
 });  
 </script>
<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-up-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:10:00 GMT -->
</html>
