<?php
include 'slicing/nav.php';
$id = $_GET['id'];
$res = mysqli_query($con, "select * from book_now where id=$id");
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
					<h2>Edit Booking</h2>
				</div>
			</div>
			<!-- end main title -->

			<!-- form -->
			<div class="col-12">
				<form method="POST" enctype="multipart/form-data" class="form">


					<div class="col-12 col-md-7 form__content">
						<div class="row row--form">

							<div class="col-12">
								<input type="text" name="movie_name" value="<?= $row['movie_name'] ?>" class="form__input" placeholder="movie name" readonly>
							</div>
							<div class="col-12 col-lg-6">
								<input type="text" name="user_name" value="<?= $row['user_name'] ?>" class="form__input" placeholder="Title" readonly>
							</div>

							<div class="col-12 col-lg-6">
								<input id="text" name="phone" class="form__input" placeholder="phone" readonly value="<?= $row['phone'] ?>">
							</div>

							<div class="col-12 col-lg-6">
								<input type="date" name="book_date" min="<?= date('Y-m-d') ?>" value="<?= $row['book_date'] ?>" class="form__input" placeholder="date">
							</div>

							<div class="col-12 col-lg-6">
								<select name="book_time" class="form__input" id="">
									<?php
									$dq = "select * from show_time inner join movies on show_time.movie_id=movies.movie_id where movies.movie_name='{$row['movie_name']}'";
									$requ = mysqli_query($con, $dq);
									while ($roww = mysqli_fetch_assoc($requ)) {
									?>
										<option value="<?= $roww['show_time'] ?>" <?= $roww['show_time'] == $row['book_time'] ? 'selected' : '' ?>><?= $roww['show_time'] ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="col-12 col-lg-6">
								<input type="text" name="seat" value="<?= $row['seat'] ?>" class="form__input" placeholder="seat" readonly>
							</div>

							<div class="col-12 col-lg-6">
								<input type="text" name="children" value="<?= $row['children'] ?>" class="form__input" placeholder="children" readonly>
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
		$phone = $_POST['phone'];
		$book_date = $_POST['book_date'];
		$book_time = $_POST['book_time'];
		$movie_name = $_POST['movie_name'];
		$seat = $_POST['seat'];
		$children = $_POST['children'];

		// if (move_uploaded_file($temp, $path)) {
		$sql = "update book_now set user_name='$user_name', phone='$phone',book_date='$book_date',book_time='$book_time',movie_name='$movie_name',seat='$seat',children='$children' where id=$id";
		// // } else {
		// 	$sql = "update movies set movie_name='$movie_name', movie_description='$movie_description',movie_year='$movie_year',genres='$genres',threter_link='$threter_link',country='$country' where movie_id=$id";
		// }
		if (mysqli_query($con, $sql)) {
			echo "<script>location.href='book-now.php'</script>";
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