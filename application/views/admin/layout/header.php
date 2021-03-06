<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from colorlib.com/polygon/admindek/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:32 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title>Admindek | Admin Template</title>
      <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="colorlib" />
      <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?= base_url() ?>/assets/css/waves.min.css" type="text/css" media="all">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/feather.css">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/font-awesome-n.min.css">
      <link rel="stylesheet" href="<?= base_url() ?>/assets/css/chartist.css" type="text/css" media="all">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/widget.css">
      <!-- data table -->
            <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/datatables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/buttons.datatables.min.css">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/responsive.bootstrap4.min.css">
      <!-- data table end -->
   </head>
   <body>
      <div class="loader-bg">
         <div class="loader-bar"></div>
      </div>
      <div id="pcoded" class="pcoded">
         <div class="pcoded-overlay-box"></div>
         <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                  <div class="navbar-logo">
                     <a href="index.html">
                     <img class="img-fluid" src="<?= base_url() ?>/assets/png/logo.png" alt="Theme-Logo" />
                     </a>
                     <a class="mobile-menu" id="mobile-collapse" href="#!">
                     <i class="feather icon-menu icon-toggle-right"></i>
                     </a>
                     <a class="mobile-options waves-effect waves-light">
                     <i class="feather icon-more-horizontal"></i>
                     </a>
                  </div>
                  <div class="navbar-container container-fluid">
                     <ul class="nav-left">
                        <li class="header-search">
                           <div class="main-search morphsearch-search">
                              <div class="input-group">
                                 <span class="input-group-prepend search-close">
                                 <i class="feather icon-x input-group-text"></i>
                                 </span>
                                 <input type="text" class="form-control" placeholder="Enter Keyword">
                                 <span class="input-group-append search-btn">
                                 <i class="feather icon-search input-group-text"></i>
                                 </span>
                              </div>
                           </div>
                        </li>
                        <li>
                           <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-d2d1d6e2f87cbebdf4013b26-="">
                           <i class="full-screen feather icon-maximize"></i>
                           </a>
                        </li>
                     </ul>
                     <ul class="nav-right">
                        <li class="header-notification">
                           <div class="dropdown-primary dropdown">
                              <div class="dropdown-toggle" data-toggle="dropdown">
                                 <i class="feather icon-bell"></i>
                                 <span class="badge bg-c-red">5</span>
                              </div>
                              <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                 <li>
                                    <h6>Notifications</h6>
                                    <label class="label label-danger">New</label>
                                 </li>
                                 <li>
                                    <div class="media">
                                       <img class="img-radius" src="<?= base_url() ?>/assets/jpg/avatar-4.jpg" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <h5 class="notification-user">John Doe</h5>
                                          <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                          <span class="notification-time">30 minutes ago</span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="media">
                                       <img class="img-radius" src="<?= base_url() ?>/assets/jpg/avatar-3.jpg" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <h5 class="notification-user">Joseph William</h5>
                                          <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                          <span class="notification-time">30 minutes ago</span>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="media">
                                       <img class="img-radius" src="jpg/avatar-4.jpg" alt="Generic placeholder image">
                                       <div class="media-body">
                                          <h5 class="notification-user">Sara Soudein</h5>
                                          <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                          <span class="notification-time">30 minutes ago</span>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="header-notification">
                           <div class="dropdown-primary dropdown">
                              <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                 <i class="feather icon-message-square"></i>
                                 <span class="badge bg-c-green">3</span>
                              </div>
                           </div>
                        </li>
                        <li class="user-profile header-notification">
                           <div class="dropdown-primary dropdown">
                              <div class="dropdown-toggle" data-toggle="dropdown">
                                 <img src="<?= base_url() ?>assets//jpg/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                 <span>Muhammad</span>
                                 <i class="feather icon-chevron-down"></i>
                              </div>
                              <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                 <li>
                                    <a href="#!">
                                    <i class="feather icon-settings"></i> Settings
                                    </a>
                                 </li>
                                 <li>
                                    <a href="">
                                    <i class="feather icon-user"></i> Profile
                                    </a>
                                 </li>
                                 <li>
                                    <a href="email-inbox.html">
                                    <i class="feather icon-mail"></i> My Messages
                                    </a>
                                 </li>
                                 <li>
                                    <a href="auth-lock-screen.html">
                                    <i class="feather icon-lock"></i> Lock Screen
                                    </a>
                                 </li>
                                 <li>
                                    <a href="">
                                    <i class="feather icon-log-out"></i> Logout
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
            <div id="sidebar" class="users p-chat-user showChat">
               <div class="had-container">
                  <div class="p-fixed users-main">
                     <div class="user-box">
                        <div class="chat-search-box">
                           <a class="back_friendlist">
                           <i class="feather icon-x"></i>
                           </a>
                           <div class="right-icon-control">
                              <div class="input-group input-group-button">
                                 <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                                 <div class="input-group-append">
                                    <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="main-friend-list">
                           <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-radius img-radius" src="jpg/avatar-3.jpg" alt="Generic placeholder image ">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="chat-header">Josephin Doe</div>
                              </div>
                           </div>
                           <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-radius" src="jpg/avatar-2.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Lary Doe</div>
                              </div>
                           </div>
                           <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-radius" src="jpg/avatar-4.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Alice</div>
                              </div>
                           </div>
                           <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-radius" src="jpg/avatar-3.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-default"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                              </div>
                           </div>
                           <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                              <a class="media-left" href="#!">
                                 <img class="media-object img-radius" src="jpg/avatar-2.jpg" alt="Generic placeholder image">
                                 <div class="live-status bg-default"></div>
                              </a>
                              <div class="media-body">
                                 <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="showChat_inner">
               <div class="media chat-inner-header">
                  <a class="back_chatBox">
                  <i class="feather icon-x"></i> Josephin Doe
                  </a>
               </div>
               <div class="main-friend-chat">
                  <div class="media chat-messages">
                     <a class="media-left photo-table" href="#!">
                     <img class="media-object img-radius img-radius m-t-5" src="jpg/avatar-2.jpg" alt="Generic placeholder image">
                     </a>
                     <div class="media-body chat-menu-content">
                        <div class="">
                           <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                     </div>
                  </div>
                  <div class="media chat-messages">
                     <div class="media-body chat-menu-reply">
                        <div class="">
                           <p class="chat-cont">Ohh! very nice</p>
                        </div>
                        <p class="chat-time">8:22 a.m.</p>
                     </div>
                  </div>
                  <div class="media chat-messages">
                     <a class="media-left photo-table" href="#!">
                     <img class="media-object img-radius img-radius m-t-5" src="jpg/avatar-2.jpg" alt="Generic placeholder image">
                     </a>
                     <div class="media-body chat-menu-content">
                        <div class="">
                           <p class="chat-cont">can you come with me?</p>
                        </div>
                        <p class="chat-time">8:20 a.m.</p>
                     </div>
                  </div>
               </div>
               <div class="chat-reply-box">
                  <div class="right-icon-control">
                     <div class="input-group input-group-button">
                        <input type="text" class="form-control" placeholder="Write hear . . ">
                        <div class="input-group-append">
                           <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>