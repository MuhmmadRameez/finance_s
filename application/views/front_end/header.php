<!DOCTYPE html>
<html>
<head>
	<title>Money Management</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets//assets/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/assets/wow/animate.css">
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>

<header>
	<div class="container">
		<div class="row headerRow">
			<div class="col-lg-3 logo">
				<h2 class="logoTop">MONEY</h2>
				<h2 class="logoBottom">MANAGEMENT</h2>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<div class="row innerHeaderRow">
					<div class="col-md-4 leftHeaderContact">
						<div class="contactHeader">
							<a href="tel:+0201202651021"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;+02 0120 2651 021</a>							
						</div>
						<div class="contactHeader">
							<a href="tel:+004253564518"><i class="fa fa-fax" aria-hidden="true"></i>&nbsp;&nbsp;+00 425 356 4518</a>							
						</div>
					</div>
					<div class="col-md-4">
						<div class="contactHeader">
							<a href="mailto:info@yoremail.com"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;info@yoremail.com</a>							
						</div>
						<div class="contactHeader">
							<a href="www.yourwebsite.com"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;&nbsp;www.yourwebsite.com</a>							
						</div>
					</div>
					<div class="col-md-4 headerSocial">
						<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 navmenu">
				<nav class="navbar navbar-expand-lg navbar-light">				  
				   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				   <span class="navbar-toggler-icon"></span>
				   </button>
				   <div class="collapse navbar-collapse" id="navbarNav">
				      <ul class="navbar-nav">
				         <li class="nav-item active">
				            <a class="nav-link" href="<?= site_url('Home/') ?>">Home <span class="sr-only">(current)</span></a>
				         </li>
				         <li class="nav-item">
				            <a class="nav-link" href="<?= site_url('Solution/') ?>">Solution</a>
				         </li>
				         <li class="nav-item">
				            <a class="nav-link" href="<?= site_url('Integration/') ?>">Integration</a>
				         </li>
				         <li class="nav-item">
				            <a class="nav-link" href="<?= site_url('About/') ?>">About Us</a>
				         </li>
				         <li class="nav-item">
				            <a class="nav-link" href="<?= site_url('Pricing/') ?>">Pricing</a>
				         </li>
				         <li class="nav-item accountBtn">
				            <a class="nav-link" href="<?= site_url('Login/') ?>">Log In</a>
				         </li>
				         <li class="nav-item accountBtn">
				            <a class="nav-link" href="<?= site_url('User/') ?>">Sign Up</a>
				         </li>				         
				      </ul>
				   </div>
				</nav>
			</div>
		</div>
	</div>	
</header>