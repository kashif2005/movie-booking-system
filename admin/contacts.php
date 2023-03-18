<?php
include 'slicing/nav.php'
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
			<!-- main title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Contact</h2>
					<div class="main__title-wrap">
						<!-- filter sort -->

						<!-- end filter sort -->

						<!-- search -->
						<form action="#" class="main__title-form">
							<input type="text" placeholder="Key word..">
							<button type="button">
								<i class="icon ion-ios-search"></i>
							</button>
						</form>
						<!-- end search -->
					</div>
				</div>
			</div>
			<!-- end main title -->

			<!-- comments -->
			<div class="col-12">
				<div class="main__table-wrap">
					<table class="main__table">
						<thead>
							<tr>
								<th>ID</th>
								<th>NAME</th>
								<th>EMAIL</th>
								<th>SUBJECT</th>
								<th>MASSAGE</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$dq = "select * from contact";
							$requ = mysqli_query($con, $dq);
							while ($roww = mysqli_fetch_assoc($requ)) {
							?>
								<tr>
									<td>
										<div class="main__table-text"><?php echo $roww['id'] ?></div>
									</td>
									<td>
										<div class="main__table-text"><?php echo $roww['name'] ?></div>
									</td>
									<td>
										<div class="main__table-text"><?php echo $roww['email'] ?></div>
									</td>
									<td>
										<div class="main__table-text"><?php echo $roww['subject'] ?></div>
									</td>
									<td>
										<div class="main__table-text"><?php echo $roww['massage'] ?></div>
									</td>
									<td>

									</td>
								<?php } ?>

								<!-- end paginator -->
				</div>
			</div>
</main>
<!-- end main content -->

<!-- modal view -->
<div id="modal-view" class="zoom-anim-dialog mfp-hide modal modal--view">
	<div class="comments__autor">
		<img class="comments__avatar" src="img/user.svg" alt="">
		<span class="comments__name">John Doe</span>
		<span class="comments__time">30.08.2018, 17:53</span>
	</div>
	<p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
	<div class="comments__actions">
		<div class="comments__rate">
			<span><i class="icon ion-md-thumbs-up"></i>12</span>

			<span>7<i class="icon ion-md-thumbs-down"></i></span>
		</div>
	</div>
</div>
<!-- end modal view -->

<!-- modal delete -->
<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
	<h6 class="modal__title">Comment delete</h6>

	<p class="modal__text">Are you sure to permanently delete this comment?</p>

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

<!-- Mirrored from hotflix.volkovdesign.com/admin/comments.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:02:10 GMT -->

</html>