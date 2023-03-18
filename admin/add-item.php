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
					<h2>Add Movies</h2>
				</div>
			</div>
			<!-- end main title -->

			<!-- form -->
			<div class="col-12">
				<form method="POST" enctype="multipart/form-data" class="form">
					<div class="row row--form">
						<div class="col-12 col-md-5 form__cover">
							<div class="row row--form">
								<div class="col-12 col-sm-6 col-md-12">
									<div class="form__img">
										<label for="form__img-upload">Upload cover (270 x 400)</label>
										<input id="form__img-upload" name="img-upload" type="file" accept=".png, .jpg, .jpeg">
										<img id="form__img" src="#" alt=" ">
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-7 form__content">
							<div class="row row--form">
								<div class="col-12">
									<input type="text" name="movie_name" class="form__input" placeholder="Title">
								</div>

								<div class="col-12">
									<textarea id="text" name="movie_description" class="form__textarea" placeholder="Description"></textarea>
								</div>

								<div class="col-12 col-lg-6">
									<input type="text" name="movie_year" class="form__input" placeholder="Release year">
								</div>

								<div class="col-12 col-lg-6">
									<select class="js-example-basic-multiple" name="genres" id="genre" multiple="multiple">
										<option value="Action">Action</option>
										<option value="Animation">Animation</option>
										<option value="Comedy">Comedy</option>
										<option value="Crime">Crime</option>
										<option value="Drama">Drama</option>
										<option value="Fantasy">Fantasy</option>
										<option value="Historical">Historical</option>
										<option value="Horror">Horror</option>
										<option value="Romance">Romance</option>
										<option value="Science-fiction">Science-fiction</option>
										<option value="Thriller">Thriller</option>
										<option value="Western">Western</option>
										<option value="Otheer">Otheer</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="row row--form">

								<div class="col-12">
									<input type="text" name="threter_link" class="form__input" placeholder="Or add a link">
								</div>

								<div class="col-12 col-lg-6">
									<select name="country" class="js-example-basic-multiple" id="country" multiple="multiple">
										<option value="Bollywood">Bollywood</option>
										<option value="Lollywood">Lollywood</option>
										<option value="Hollywood">Hollywood</option>
										<option value="Chinese">Chinese</option>
										<option value="Japanese">Japanese</option>
										<option value="Korean">Korean</option>
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

	$filename = $_FILES["img-upload"]["name"];
	$temp = $_FILES["img-upload"]["tmp_name"];
	$movie = mysqli_real_escape_string($con, $movie_description);

	$path = 'img-uplode/' . $filename;
	$q = "insert into movies values(null,'$movie_name','$movie','$movie_year','$genres','$filename','$threter_link','$country')";

	if (move_uploaded_file($temp, $path)) {
		if (mysqli_query($con, $q)) {
			echo "<script>location.href='movies.php'</script>";
		} else {
			echo "<script>alert('image not uploded')</script>";
		}
	} else {
		echo "<script>alert('Invalid Record Entry')</script>";
	}
}


?>