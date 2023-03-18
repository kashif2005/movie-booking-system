<?php
include 'config.php';
session_start();
?>

<!doctype html>
<html class="no-js" lang="">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Movfix - Online Movies & TV Shows Template</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
<!-- Place favicon.ico in the root directory -->

<!-- CSS here -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/fontawesome-all.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/odometer.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
</head>

<body>

<!-- preloader -->
<div id="preloader">
<div id="loading-center">
<div id="loading-center-absolute">
<img src="img/preloader.svg" alt="">
</div>
</div>
</div>
<!-- preloader-end -->

<!-- Scroll-top -->
<button class="scroll-top scroll-to-target" data-target="html">
<i class="fas fa-angle-up"></i>
</button>
<!-- Scroll-top-end-->

<!-- header-area -->
<header>
<div id="sticky-header" class="menu-area transparent-header">
<div class="container custom-container">
<div class="row">
<div class="col-12">
<div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
<div class="menu-wrap">
<nav class="menu-nav show">
    <div class="logo">
        <a href="index.php">
            <img src="img/logo/logo-new.png" alt="Logo">
        </a>
    </div>
    <div class="navbar-wrap main-menu d-none d-lg-flex">
        <ul class="navigation">
            <li class="active menu-item-has-children"><a href="index.php">Home</a>
                <!-- <ul class="submenu">
    <li class="active"><a href="index.php ">Home One</a></li>
    <li><a href="index-2.html">Home Two</a></li>
</ul> -->
            </li>
            <li class="menu-item-has-children"><a href="movie.php">Movie</a> </li>
            <li><a href="theater.php">Theater</a></li>
            <li><a href="pricing.php">Pricing</a></li>


            <!-- <li class="menu-item-has-children"><a href="#">blog</a>
<ul class="submenu">
    <li><a href="blog.html">Our Blog</a></li>
    <li><a href="blog-details.html">Blog Details</a></li>
</ul>
</li> -->
            <li><a href="contact.php">contacts</a></li>
        </ul>
    </div>
    <div class="header-action d-none d-md-block">
        <ul>
            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
            <?php if (isset($_SESSION['user_name'])) {
                echo '<li class="header-btn"><a href="admin/logout.php" class="btn">Logout</a></li>';
            } else {
                echo '<li class="header-btn"><a href="admin/signin.php" class="btn">Sign In</a></li>';
            } ?>
        </ul>
    </div>
</nav>
</div>

<!-- Mobile Menu  -->
<div class="mobile-menu">
<div class="close-btn"><i class="fas fa-times"></i></div>

<nav class="menu-box">
    <div class="nav-logo"><a href="index.php"><img src="img/logo/logo.png" alt="" title=""></a>
    </div>
    <div class="menu-outer">
        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
    </div>
    <div class="social-links">
        <ul class="clearfix">
            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
        </ul>
    </div>
</nav>
</div>
<div class="menu-backdrop"></div>
<!-- End Mobile Menu -->

<!-- Modal Search -->
<div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="GET" action="movie.php">
            <input type="text" name='q' placeholder="Search here...">
            <button><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
</div>
<!-- Modal Search-end -->

</div>
</div>
</div>
</div>
</header>