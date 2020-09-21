<?php 
	include '../lib/Session.php';
	Session:: checkLogin(); 
	?>
<?php include '../config/config.php'; ?>
<?php include '../lib/Database.php'; ?>
<?php include '../helpers/Format.php'; ?>

<?php
	$db = new Database();
	$fm = new Format();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>SF Admin Panel</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>Sign In</h2>
		<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$username = $fm->validation($_POST['username']);
		$password = $fm->validation(md5($_POST['password']));

		$username = mysqli_real_escape_string($db->link, $username);
		$password = mysqli_real_escape_string($db->link, $password);

		$query = "SELECT * FROM tbl_user WHERE username ='$username' AND password ='$password'";
		$result = $db->select($query);
		if($result != false){
			//$value = mysqli_fetch_array($result);
			$value = $result->fetch_assoc();
				Session::set("login", true);
				Session::set("username", $value['username']);
				Session::set("userId", $value['id']);
				Session::set("userRole", $value['role']);
				echo "<script>window.location = 'index.php';</script>";
		
	} else {
		echo "<span class='error'>Username or Password not match!!....</span>";
	} 
}
?>
		<form action="login.php" method="post">
			<div class="username">
				<span class="username">Username:</span>
				<input type="text" name="username" class="name" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="password" class="password" placeholder="" required="">
				<div class="clearfix"></div>
			</div>
			<div class="rem-for-agile">
				<input type="checkbox" name="remember" class="remember">Remember me<br>
				<a href="#">Forgot Password</a><br>
			</div>
			<div class="login-w3">
					<input type="submit" class="login" value="Sign In">
			</div>
			<div class="clearfix"></div>
		</form>
				<div class="back">
					<a href="index.html">Back to home</a>
				</div>
				<div class="footer">
					<p>&copy; <?php echo date("Y");?> - All Rights Reserved | Design by  <a href="https://asonlinebd.com.com/" target="_blank">Md.Abubakar</a> </p>
				</div>
	</div>
	</div>
	</div>
</body>
</html>