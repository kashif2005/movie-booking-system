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
					<h2>Show time</h2>

					<span class="main__title-stat">21,356 Total</span>

					<div class="main__title-wrap">
						<!-- search -->
						<form action="#" class="main__title-form">
							<input type="text" placeholder="Key word..">
							<button type="button">
								<i class="icon ion-ios-search"></i>
							</button>
						</form>
						<!-- end search -->
						<!-- filter sort -->
						<div class="filter" id="filter__sort">

							<a href="add-show-time.php" class="main__title-link">Add Show Time</a>
						</div>
						<!-- end filter sort -->

					</div>
				</div>
			</div>
			<!-- end main title -->

			<!-- comments -->
			<div class="col-12">
				<div class="main__table-wrap">
					<table class="main__table">
						<thead>

							<th>ID</th>
							<th>MOVIE NAME</th>
							<th>THEATER NAME</th>
							<th>SHOW TIME</th>
						</thead>

						<tbody id="tableLoad">
							<tr>
								<?php
								$dq = "select * from show_time inner join movies on show_time.movie_id=movies.movie_id";
								$requ = mysqli_query($con, $dq);
								while ($roww = mysqli_fetch_assoc($requ)) {
								?>
							<tr>
								<td>
									<div class="main__table-text"><?php echo $roww['id'] ?></div>
								</td>
								<td>
									<div class="main__table-text"><?php echo $roww['movie_name'] ?></div>
								</td>
								<td>
									<div class="main__table-text"><?php echo $roww['theater_name'] ?></div>
								</td>
								<td>
									<div class="main__table-text"><?php echo $roww['show_time'] ?></div>
								</td>
								<td>
									<div class="main__table-btns">
										<a href="edit-show-time.php?id=<?= $roww['id'] ?>" class="main__table-btn main__table-btn--view ">
											<i class="icon ion-ios-create"></i>
										</a>

										<a href="delete-show-time.php?id=<?= $roww['id'] ?>" class="main__table-btn main__table-btn--delete">
											<i class="icon ion-ios-trash"></i>
										</a>
									</div>
								</td>

				</div>
				</td>
				</tr>
			<?php
								}
			?>
			</tbody>
			</table>
			</div>
		</div>
		<!-- end comments -->

		<!-- paginator -->

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