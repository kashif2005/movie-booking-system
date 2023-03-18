<?php
include 'slicing/nav.php'
?>
<!-- end header -->

<!-- sidebar -->
<?php
include 'slicing/sidebar.php'
?>
<!-- end header -->

<!-- sidebar -->

<!-- end sidebar -->
<style>
	* {
		color: white !important;
	}
</style>
<!-- main content -->
<main class="main">
	<div class="container-fluid">
		<div class="row">
			<!-- main title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Add Theater</h2>
				</div>
			</div>
			<!-- end main title -->

			<!-- form -->
			<div class="col-12">
				<form method="POST" enctype="multipart/form-data" class="form">
					<div class="row row--form">

						<div class="col-12 col-md-7 form__content">
							<div class="row row--form">
								<div class="col-12">
									<input type="text" name="theater_name" class="form__input" placeholder="Title">
								</div>

								<div class="col-12">
									<textarea id="text" name="theater_address" class="form__textarea" placeholder="address"></textarea>
								</div>

								<div class="col-12 col-lg-6">
									<input type="text" name="theater_seat" class="form__input" placeholder="seat">
								</div>

								<div class="col-12">
									<button type="submit" name="btn" class="form__btn">publish</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>




			<!-- end form -->
		</div>
	</div>
</main>
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

<!-- Mirrored from hotflix.volkovdesign.com/admin/add-item.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:02:08 GMT -->

</html>


<?php
if (isset($_POST['btn'])) {

	extract($_POST);

	$q = "insert into theater values(null,'$theater_name','$theater_address','$theater_seat')";

	if (mysqli_query($con, $q)) {
		echo "<script>location.href='theater.php'</script>";
	} else {
		echo "<script>alert('data not uploded')</script>";
	}
} else {
}
?>