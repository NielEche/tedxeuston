<?php
 session_start();


 ?>
 <!DOCTYPE html>
<html>
	<!-- Mirrored from pages.revox.io/dashboard/4.1.0/html/condensed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jun 2019 20:37:02 GMT -->
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta charset="utf-8" />
		<title>TEDXEUSTON - Admin Dashboard UI Kit - Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
		<script src="../../../../cdn-cgi/apps/head/QJpHOqznaMvNOv9CGoAdo_yvYKU.js"></script><link rel="apple-touch-icon" href="pages/ico/tedxelogo.svg">
		<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/tedxelogo.svg">
		<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/tedxelogo.svg">
		<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/tedxelogo.svg">
		<link rel="icon" type="image/x-icon" href="tedxelogo.svg" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
		<link href="assets/plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
		<link href="assets/plugins/summernote/css/summernote.css" rel="stylesheet" type="text/css" media="screen">
		<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
		<link href="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" media="screen">
		<link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
		<link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
		<link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
		<link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="fixed-header dashboard windows desktop pace-done sidebar-visible menu-pin" >


		

<div class="register-container full-height sm-p-t-30">
<div class="d-flex justify-content-center flex-column full-height ">
<img src="assets/img/tedxelogo.svg" alt="logo" data-src="assets/img/tedxelogo.svg" data-src-retina="assets/img/tedxelogo.svg" width="78" height="22">
<h3>SIGN UP</h3>
<!--<p>
Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
</p>-->
<form id="form-register" class="p-t-15" role="form" method="POST" action="code.php">
	<?php
		if(isset($_SESSION['success']) && $_SESSION['success'] !='') {
			echo '<h2> '.$_SESSION['success'].' </h2>';
			unset($_SESSION['success']);
		}

		if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
			echo '<h2 class="bg-info"> '.$_SESSION['status'].'  </h2>';
			unset($_SESSION['status']);
		}
	?>
	
<div class="row">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>First Name</label>
<input type="text" name="firstname" placeholder="John" class="form-control" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Last Names</label>
<input type="text" name="lastname" placeholder="Doe" class="form-control" required>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group form-group-default">
<label> User name</label>
<input type="text" name="username" placeholder="your username" class="form-control" required>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group form-group-default">
<label>Password</label>
<input type="password" name="password" placeholder="Minimum of 4 Charactors" class="form-control" required>
</div>
</div>
</div>
<div class="row">
 <div class="col-md-12">
<div class="form-group form-group-default">
<label>Email</label>
<input type="email" name="email" placeholder="example@email.com" class="form-control" required>
</div>
</div>
</div>
<div class="row m-t-10">
<div class="col-lg-6">
<!--<p><small>I agree to the <a href="#" class="text-info">Pages Terms</a> and <a href="#" class="text-info">Privacy</a>.</small></p>-->
</div>
<div class="col-lg-6 text-right">
<!--<a href="#" class="text-info small">Help? Contact Support</a>-->
</div>
</div>
<button class="btn btn-primary btn-cons m-t-10" name="registerbtn" type="submit">Create a new account</button>
<a href="login.php" style="background-color: #fff !important; color: red !important;" class="btn btn-primary btn-cons m-t-10">login</a>
</form>
</div>
</div>

<div class="overlay hide" data-pages="search">

<div class="overlay-content has-results m-t-20">

<div class="container-fluid">

<img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">


<a href="#" class="close-icon-light overlay-close text-black fs-16">
<i class="pg-close"></i>
</a>

</div>

<div class="container-fluid">

<input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
<br>
<div class="inline-block">
<div class="checkbox right">
<input id="checkboxn" type="checkbox" value="1" checked="checked">
<label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
</div>
</div>
<div class="inline-block m-l-10">
<p class="fs-13">Press enter to search</p>
</div>

</div>

<div class="container-fluid">
<span>
<strong>suggestions :</strong>
</span>
<span id="overlay-suggestions"></span>
<br>

</div>

</div>

</div>


<?php 
	include('includes/scripts.php');
	include('includes/footer.php');
?>
