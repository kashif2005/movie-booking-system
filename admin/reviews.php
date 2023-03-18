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
					<h2>Reviews</h2>

					<span class="main__title-stat">9,071 Total</span>

					<div class="main__title-wrap">
						<!-- filter sort -->
						<!-- <div class="filter" id="filter__sort">
							<span class="filter__item-label">Sort by:</span>

							<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Date created">
								<span></span>
							</div> -->

						<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">
							<li>Date created</li>
							<li>Rating</li>
						</ul>
					</div>
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

		<!-- reviews -->
		<div class="col-12">
			<div class="main__table-wrap">
				<table class="main__table">
					<thead>
						<tr>
							<th>ID</th>
							<th>USER NAME</th>
							<th>EMAIL</th>
							<th>RATING</th>
							<th>MASSAGE</th>
							<th>ACTIONS</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$dq = "select * from reviews";
						$requ = mysqli_query($con, $dq);
						while ($roww = mysqli_fetch_assoc($requ)) {
						?>
							<tr>
								<td>
									<div class="main__table-text"><?= $roww['id'] ?></div>
								</td>
								<td>
									<div class="main__table-text"><?= $roww['user_name'] ?></div>
								</td>
								<td>
									<div class="main__table-text"><?= $roww['user_email'] ?></div>
								</td>
								<td>
									<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i><?= $roww['rating'] ?>.0</div>
								</td>
								<td>
									<div class="main__table-text"><?= $roww['message'] ?></div>
								</td>
								<td>
									<div class="main__table-btns">
										<a href="edit-reviews.php?id=<?= $roww['id'] ?>" class="main__table-btn main__table-btn--view ">
											<i class="icon ion-ios-create"></i>
										</a>
										</a>
										<a href="delete-reviews.php?id=<?= $roww['id'] ?>" class="main__table-btn main__table-btn--delete">
											<i class="icon ion-ios-trash"></i>
										</a>
										<i class="icon ion-ios-trash"></i>
										</a>
									</div>
								</td>
							</tr>
						<?php } ?>

						<!-- end reviews -->

						<!-- paginator -->

						<!-- end paginator -->
			</div>
		</div>
</main>
<!-- end main content -->

<!-- modal view -->
<div id="modal-view" class="zoom-anim-dialog mfp-hide modal modal--view">
	<div class="reviews__autor">
		<img class="reviews__avatar" src="img/user.svg" alt="">
		<span class="reviews__name">Best Marvel movie in my opinion</span>
		<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

		<span class="reviews__rating"><i class="icon ion-ios-star"></i>8.4</span>
	</div>
	<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
</div>
<!-- end modal view -->

<!-- modal delete -->
<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
	<h6 class="modal__title">Review delete</h6>

	<p class="modal__text">Are you sure to permanently delete this review?</p>

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

<!-- Mirrored from hotflix.volkovdesign.com/admin/reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:02:10 GMT -->

</html>