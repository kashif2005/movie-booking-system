<?php
include 'slicing/nav.php';
$id = $_GET['id'];
$res = mysqli_query($con, "select * from theater where theater_id=$id");
$row = mysqli_fetch_assoc($res);
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
					<h2>Edit theater</h2>
				</div>
			</div>
			<!-- end main title -->

			<!-- form -->
			<div class="col-12">
				<form method="POST" enctype="multipart/form-data" class="form">
					<div class="row row--form">
						<!-- <div class="col-12 col-md-5 form__cover"> -->
						<!-- <div class="row row--form"> -->
						<!-- <div class="col-12 col-sm-6 col-md-12"> -->
						<!-- <div class="form__img">
										<label for="form__img-upload">Upload cover (270 x 400)</label>
										<input id="form__img-upload" name="img-upload" type="file" accept=".png, .jpg, .jpeg">
										<img id="form__img" src="img-uplode/ alt=" ">
									</div> -->
						<!-- </div> -->
						<!-- </div> -->
						<!-- </div> -->

						<div class="col-12 col-md-7 form__content">
							<div class="row row--form">
								<div class="col-12">
									<input type="text" name="theater_id" value="<?= $row['theater_id'] ?>" class="form__input" placeholder="Title">
								</div>

								<div class="col-12">
									<textarea id="text" name="theater_name" class="form__textarea" placeholder="theater name"><?= $row['theater_name'] ?></textarea>
								</div>

								<div class="col-12 col-lg-6">
									<input type="text" name="theater_address" value="<?= $row['theater_address'] ?>" class="form__input" placeholder="address">
								</div>

								<div class="col-12 col-lg-6">
									<input type="text" name="theater_seat" value="<?= $row['theater_seat'] ?>" class="form__input" placeholder="seat">
								</div>

								<div class="col-12">
									<button type="submit" name="btn" class="form__btn">publish</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<?php
			if (isset($_POST['btn'])) {

				extract($_POST);

				// $sql = "update theater set theater_name='$theater_name', theater_address='$theater_address',theater_seat='$theater_seat' where theater_id=$id";
				// } 
				// else {
				$sql = "update theater set theater_name='$theater_name', theater_address='$theater_address',theater_seat='$theater_seat' where theater_id=$id";
				if (mysqli_query($con, $sql)) {
					echo "<script>location.href='theater.php'</script>";
				}
			}
			// }
			?>


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