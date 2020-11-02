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
		<link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
		<link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="fixed-header dashboard">

<div class="login-wrapper ">

<div class="bg-pic">

<img src="assets/img/biggie.jpg" data-src="assets/img/biggie.jpg" data-src-retina="assets/img/biggie.jpg" alt="" class="lazy">


<div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
<h2 class="semi-bold text-white">
TEDxEuston</h2>
<p class="small">
images Displayed are solely for representation purposes only, All work copyright of © 2009-2020 TEDXEUSTON.
</p>
</div>

</div>


<div class="login-container bg-white">
<div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
<img src="assets/img/tedxelogo.svg" alt="logo" data-src="assets/img/tedxelogo.svg" data-src-retina="assets/img/tedxelogo.svg" width="78" height="22">
<p class="p-t-35">Sign into your TEDXEUSTON account</p>
		<?php
		if(isset($_SESSION['success']) && $_SESSION['success'] !='')
		{
			echo '
			<div class="alert alert-success" role="alert">
				<button class="close" data-dismiss="alert"></button>
				<strong>Success: </strong>'.$_SESSION['success'].'
			</div>';
			unset($_SESSION['success']);
		}
		if (isset($_SESSION['status']) && $_SESSION['status'] !='')
			{
			echo '<div class="alert alert-danger" role="alert">
			<button class="close" data-dismiss="alert"></button>
			<strong>Danger: </strong>'.$_SESSION['status'].'
			</div>';
			
			unset($_SESSION['status']);
		}
		?>

<form id="form-login" class="p-t-15" action="code.php" method="POST">

<div class="form-group form-group-default">
<label>Email</label>
<div class="controls">
<input type="email" name="email" placeholder="EMAIL" class="form-control" required>
</div>
</div>


<div class="form-group form-group-default">
<label>Password</label>
<div class="controls">
<input type="password" class="form-control" name="password" placeholder="YOUR PASSWORD" required>
</div>
</div>

<button class="btn btn-primary btn-cons m-t-10" name="login_btn" id="btn-login" type="submit">Sign in</button>
<!--<a href="registerxy.php" class="btn btn-primary btn-cons m-t-10">Register</a>-->

</form>

</div>
</div>

</div>
	

<?php  
	include('includes/scripts.php');
?>