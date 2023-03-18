<?php
include '../config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hotflix.volkovdesign.com/admin/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:02:08 GMT -->
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
<!-- authorization form -->
<form method="POST" class="sign__form">
<a href="../index.php" class="sidebar__nav-link"><i class="icon ion-ios-arrow-round-back"></i> <span>Back to Website</span></a>
<a href="../index.php" class="sign__logo" style="color:white;margin:0">
	<h2>Movie Booking System</h2>
</a>
	<h3 class='text-primary' style="text-align:center;">Login</h3>


<?php

if (isset($_POST['sign__btn'])) {
	$email = $_POST['email'];
	$PASSWORD=md5($_POST['password']);

  $q="select * from users where email='$email' and PASSWORD='$PASSWORD'";
  $req=mysqli_query($con,$q);

  if(mysqli_num_rows($req)>0){
 $row=mysqli_fetch_assoc($req);
 $_SESSION["user_name"]=$row["user_name"];
 $_SESSION["role"]=$row["role"];	

	echo "<script>location.href='index.php';</script>";
  }
  else{
	echo "<script>alert('Incorrect email and password')</script>";
  }
}
?>

<div class="sign__group">
	<input type="text" name="email" class="sign__input" placeholder="Email">
</div>

<div class="sign__group">
	<input type="password" name="password" class="sign__input" placeholder="Password">
</div>

<button class="sign__btn" name="sign__btn" type="submit">Sign in</button>

<span class="sign__text">Don't have an account? <a href="signup.php">Sign up!</a></span>

<!-- <span class="sign__text"><a href="forgot.html">Forgot password?</a></span> -->
</form>
<!-- end authorization form -->
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

<!-- Mirrored from hotflix.volkovdesign.com/admin/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:02:10 GMT -->
</html>
