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
					<h2>Add Show Time</h2>
				</div>
			</div>
			<!-- end main title -->

			<!-- form -->
			<div class="col-12">
				<form method="POST" enctype="multipart/form-data" class="form">
					<div class="row row--form">

						<div class="col-12 form__content">
							<div class="row row--form">
								<div class="col-12">
									<!-- <input type="text" name="movie_id" class="form__input" placeholder="id"> -->
									<select name="movie_theater" class="form__input">
										<option value="" selected>Choose anyone theater</option>
										<?php
										$show = mysqli_query($con, "select * from theater");
										foreach ($show as $i) {
											echo "<option value='{$i['theater_name']}'>{$i['theater_name']}</option>";
										} ?>
									</select>
								</div>
								<div class="col-12">
									<select name="movie_id" class="form__input">
										<option value="" selected>Choose anyone movie</option>

										<?php
										$show = mysqli_query($con, "select * from movies");
										foreach ($show as $i) {
											echo "<option value='{$i['movie_id']}'>{$i['movie_name']}</option>";
										} ?>
									</select>
								</div>


								<div class="col-12">
									<select name="show_time" class="form__input">
										<?php
										for ($i = 10; $i < 12; $i += 2) {
											echo "<option value='{$i} AM to " . $i + 2 . " PM'>{$i} AM to " . $i + 2 . " PM </option>";
										}
										for ($i = 1; $i < 10; $i += 2) {
											echo "<option value='{$i} PM to " . $i + 2 . " PM'>{$i} PM to " . $i + 2 . " PM</option>";
										}
										?>
									</select>

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

	// $filename = $_FILES["img-upload"]["name"];
	// $temp = $_FILES["img-upload"]["tmp_name"];

	// $path = 'img-uplode/' . $filename;
	$q = "insert into show_time values(null,'$movie_id','$movie_theater','$show_time',0)";

	// if (move_uploaded_file($temp, $path)) {
	if (mysqli_query($con, $q)) {
		echo "<script>location.href='show-time.php'</script>";
	} else {
		echo "<script>alert('data not uploded')</script>";
	}
} else {
	// echo "<script>alert('Invalid Record Entery')</script>";
}
// }


?>