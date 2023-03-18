<div class="sidebar">
	<!-- sidebar logo -->
	<a href="index.php" class="sidebar__logo">
		<img src="" alt="">
		<h3 style="text-align:center;color:white;padding-top:20px">Movies Booking System</h3>
	</a>
	<!-- end sidebar logo -->

	<!-- sidebar user -->
	<div class="sidebar__user">
		<div class="sidebar__user-img">
			<img src="img/user.svg" alt="">
		</div>

		<div class="sidebar__user-title">
			<span>Admin</span>
			<p><?= $_SESSION["user_name"] ?></p>
		</div>

		<a href="logout.php" class="sidebar__user-btn">
			<i class="icon ion-ios-log-out"></i>
		</a>
	</div>
	<!-- end sidebar user -->

	<!-- sidebar__nav-link--active -->
	<!-- sidebar nav -->
	<div class="sidebar__nav-wrap">
		<ul class="sidebar__nav">
			<li class="sidebar__nav-item">
				<a href="index.php" class="sidebar__nav-link "><i class="icon ion-ios-keypad"></i> <span>Dashboard</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="movies.php" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Movies</span></a>
			</li>
			<li class="sidebar__nav-item">
				<a href="theater.php" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Theater</span></a>
			</li>
			<li class="sidebar__nav-item">
				<a href="users.php" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Users</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="show-time.php" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>show time</span></a>
			</li>
			<li class="sidebar__nav-item">
				<a href="book-now.php" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>Booking</span></a>
			</li>
			<li class="sidebar__nav-item">
				<a href="category.php" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> <span>category</span></a>

			<li class="sidebar__nav-item">
				<a href="contacts.php" class="sidebar__nav-link"><i class="icon ion-ios-chatbubbles"></i> <span>Contacts</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="reviews.php" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> <span>Reviews</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="../index.php" class="sidebar__nav-link"><i class="icon ion-ios-arrow-round-back"></i> <span>Back to website</span></a>
			</li>
		</ul>
	</div>
	<!-- end sidebar nav -->

	<!-- sidebar copyright -->

</div>
<!-- end sidebar -->

<!-- main content -->


<!-- dashbox -->

<!-- end main content -->

<!-- JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.mCustomScrollbar.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/admin.js"></script>
</body>

<!-- Mirrored from hotflix.volkovdesign.com/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:01:19 GMT -->

</html>