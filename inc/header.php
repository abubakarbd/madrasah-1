		<?php include 'config/config.php'; ?>
		<?php include 'lib/Database.php'; ?>
		<?php include 'helpers/Format.php'; ?>
		
		<?php
			$db = new Database();
			$fm = new Format();
		?>
	
<!DOCTYPE html>
<html>
<head>
	<title>SF Somobay Somaty Ltd</title>
	<meta charset="utf-8">
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- top banner -->
		<div class="top-banner alert-success">
				<div class="container">
					<div class="top-left">
						<nav class="navbar navbar-default">
						<ul class="nav navbar-nav" id="cl-effect-18">
							<li><a href="#" class="effect1">01726 122 917</a></li>
							<li><a href="#" class="effect1">admin@gmail.com</a></li>
						</ul>	
				</nav>
					</div>
					<div class="top-right">
					<nav class="navbar navbar-default">
						<ul class="nav navbar-nav" id="cl-effect-18">
							<li class=""><a href="as_admin/login.php" class="effect1">Admin Login</a></li>
							<li class=""><a href="as_member/login.php" class="effect1">Membar</a></li>
						</ul>	
				</nav>
				</div>
				</div>
				<div class="clearfix"> </div>
		</div>
	<!-- top banner -->

	<!-- banner -->
	<div class="banner">
		<div class="banner-info">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="index.php"><span>SF</span> Somobay</a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
							<li class="act"><a href="index.php" class="effect1 active">Home</a></li>
							<li><a href="events.php">Reviews</a></li>
							<li><a href="breaking.php">Culture</a></li>
							<li><a href="entertainment.php">Entertainment</a></li>
							<li role="presentation" class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
								  Business <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
								  <li><a href="short-codes.php">Short-Codes</a></li>
								  <li><a href="icons.php">Icons</a></li>
								 
								</ul>
							</li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>