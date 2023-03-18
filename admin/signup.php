<?php
include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hotflix.volkovdesign.com/admin/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:02:10 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSS -->
<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" href="css/select2.min.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/admin.css">

<!-- Favicons -->
<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Dmitry Volkov">
<title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body>

<div class="sign section--bg" data-bg="img/section/section.jpg">
<div class="container">
<div class="row">
<div class="col-12">
<div class="sign__content">
<!-- registration form -->

<?php

if (isset($_POST['sign__btn'])) {
	$user_name = $_POST['username'];
	$email = $_POST['email'];
	$PASSWORD = md5($_POST['password']);

  $q="insert into users values(null,'$user_name ','$email','$PASSWORD','user')";
  if(mysqli_query($con,$q)){
	echo "<script>location.href='signin.php';</script>";
  }
  else{
	echo "<script>alert('Invalid Request')</script>";
  }
}
?>

<form method="POST" class="sign__form">
<a href="index.php" class="sign__logo" style="color:white ;">
<a href="../index.php" class="sidebar__nav-link"><i class="icon ion-ios-arrow-round-back"></i> <span>Back to Website</span></a>
<a href="../index.php" class="sign__logo" style="color:white;margin:0">
<h2>Movie Booking System</h2>
	<h3 style="text-align:center;">Sign UP</h3>
</a>
	<!-- <a href="index.php" class="sign__logo"></a> -->

	<div class="sign__group">
		<input type="text" class="sign__input" name="username" placeholder="User Name">
	</div>

	<div class="sign__group">
		<input type="text" class="sign__input" name="email" placeholder="Email">
	</div>

	<div class="sign__group">
		<input type="password" class="sign__input" name="password" placeholder="Password">
	</div>

	<!-- <div class="sign__group sign__group--checkbox">
		<input id="remember" name="remember" type="checkbox" checked="checked">
		<label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
	</div> -->
	
	<button class="sign__btn"  name="sign__btn" type="submit">Sign up</button>


	<span class="sign__text">Already have an account? <a href="signin.php">Sign in!</a></span>
</form>
<!-- registration form -->
</div>
</div>
</div>
</div>
</div>

<!-- JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.mCustomScrollbar.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/admin.js"></script>
</body>

<!-- Mirrored from hotflix.volkovdesign.com/admin/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:02:10 GMT -->
</html>