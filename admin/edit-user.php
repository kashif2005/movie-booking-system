<?php
include 'slicing/nav.php';
include '../config.php';
// session_start();

// if (isset($_SESSION['login']) && $_SESSION['role'] != "admin") {
//   header("location:login.php");
//   exit;
// }

$id = $_GET['id'];
$q = "select * from users where id=$id";

$res = mysqli_query($con, $q);
$row = mysqli_fetch_assoc($res);

// echo $row['name'],$row['email'],$row['role'];

?>
<!-- end header -->

<!-- sidebar -->
<?php
include 'slicing/sidebar.php'
?>
<!-- end sidebar -->

<!-- main content -->
<main class="main">
<div class="container-fluid">
<div class="row">

<!-- profile -->
<div class="col-12">
<div class="profile__content">
<!-- profile user -->
<div class="profile__user">
	<div class="profile__avatar">
		<img src="img/user.svg" alt="">
	</div>
	<!-- or red -->
	<!-- <div class="profile__meta profile__meta--green">
		<h3>John Doe <span>(Approved)</span></h3>
		<span>HotFlix ID: 23562</span>
	</div> -->
</div>
<!-- end profile user -->

<!-- profile tabs nav -->
<ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a>
	</li>
</ul>
<!-- end profile tabs nav -->

<!-- profile mobile tabs nav -->
<div class="profile__mobile-tabs" id="profile__mobile-tabs">
	<div class="profile__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<input type="button" value="Profile">
		<span></span>
	</div>

	<div class="profile__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a></li>
		</ul>
	</div>
</div>
<!-- end profile mobile tabs nav -->

<!-- profile btns -->
<div class="profile__actions">
	<a href="#modal-delete3" class="profile__action profile__action--delete open-modal"><i class="icon ion-ios-trash"></i></a>
</div>
<!-- end profile btns -->
</div>
</div>
<!-- end profile -->

<!-- content tabs -->
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
<div class="col-12">
	<div class="row">
		<!-- details form -->
		<div class="col-12 col-lg-6">
			<form method="POST" class="form form--profile">
				<div class="row row--form">
					<div class="col-12">
						<h4 class="form__title">Profile details</h4>
					</div>

					<div class="col-12 col-md-6 col-lg-12 col-xl-6">
						<div class="form__group">
							<label class="form__label" for="username">Username</label>
							<input id="username" type="text" name="username" value="<?= $row['user_name'] ?>" class="form__input" placeholder="User name">
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-12 col-xl-6">
						<div class="form__group">
							<label class="form__label" for="email">Email</label>
							<input id="email" type="text" name="email" value="<?= $row['email'] ?>" class="form__input" placeholder="email@email.com">
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-12 col-xl-6">
						<div class="form__group">
							<label class="form__label" for="rights">Role</label>
							<select class="js-example-basic-single" name="role" id="rights">
								<option value="user">User</option>
								<!-- <option value="Moderator">Moderator</option> -->
								<option value="admin">Admin</option>
							</select>
						</div>
					</div>

					<div class="col-12">
						<button class="form__btn" name="btn" type="submit">Save</button>
					</div>
				</div>
			</form>
		</div>

		<?php
		if (isset($_POST['btn'])) {
		
			$user_name = $_POST['username'];
			$email = $_POST['email'];
			$role = $_POST['role'];
			$sql = "update users set user_name='$user_name', email='$email', role='$role' where id=$id";
	
			if (mysqli_query($con, $sql)) {

				echo "<script>location.href='users.php'</script>";
			}
		}
		?>

		<!-- end details form -->

		<!-- password form -->
		<div class="col-12 col-lg-6">
			<form action="#" class="form form--profile">
				<div class="row row--form">
					<div class="col-12">
						<h4 class="form__title">Change password</h4>
					</div>

					<div class="col-12 col-md-6 col-lg-12 col-xl-6">
						<div class="form__group">
							<label class="form__label" for="oldpass">Old Password</label>
							<input id="oldpass" type="password" name="oldpass" class="form__input">
						</div>
					</div>

					<div class="col-12 col-md-6 col-lg-12 col-xl-6">
						<div class="form__group">
							<label class="form__label" for="newpass">New Password</label>
							<input id="newpass" type="password" name="newpass" class="form__input">
						</div>
					</div>

					<div class="col-12">
						<button class="form__btn" type="button">Change</button>
					</div>
				</div>
			</form>
		</div>
		<!-- end password form -->
	</div>
</div>
</div>

</div>
<!-- end content tabs -->
</div>
</div>
</main>
<!-- end main content -->

<!-- modal delete -->
<div id="modal-delete3" class="zoom-anim-dialog mfp-hide modal">
<h6 class="modal__title">User delete</h6>

<p class="modal__text">Are you sure to permanently delete this user?</p>

<div class="modal__btns">
<button class="modal__btn modal__btn--apply" type="button">Delete</button>
<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
</div>
</div>
<!-- end modal delete -->

<!-- JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script src="js/jquery.mCustomScrollbar.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/admin.js"></script>
</body>

<!-- Mirrored from hotflix.volkovdesign.com/admin/edit-user.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:02:08 GMT -->

</html>