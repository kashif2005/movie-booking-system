<?php
include 'slicing/nav.php';
$id = $_GET['id'];
$res = mysqli_query($con, "select * from reviews where id=$id");
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
					<h2>Edit Reviews</h2>
				</div>
			</div>
			<!-- end main title -->

			<!-- form -->
			<div class="col-12">
				<form method="POST" enctype="multipart/form-data" class="form">


					<div class="col-12 col-md-7 form__content">
						<div class="row row--form">

							<div class="col-12">
								<input type="text" name="user_name" value="<?= $row['user_name'] ?>" class="form__input" placeholder="movie name" >
							</div>
							<div class="col-12 col-lg-6">
								<input type="email" name="user_email" value="<?= $row['user_email'] ?>" class="form__input" placeholder="Title" >
							</div>

							<div class="col-12 col-lg-6">
								<input id="text" name="rating" class="form__input" placeholder="rating" value="<?= $row['rating'] ?>">
							</div>

							<div class="col-12 col-lg-6">
								<input type="text" name="message" value="<?= $row['message'] ?>" class="form__input" placeholder="me ssage">
							</div>

						</div>
					</div>
			</div>
			<div class="col-12">
				<div class="row row--form">

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

		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$rating = $_POST['rating'];
		$message = $_POST['message'];
		
		$sql = "update reviews set user_name='$user_name', user_email='$user_email',rating='$rating',message='$message' where id=$id";
	
		if (mysqli_query($con, $sql)) {
			echo "<script>location.href='reviews.php'</script>";
		}
	}
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