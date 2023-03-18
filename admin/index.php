<?php
include 'slicing/nav.php'
?>
<!-- end header -->

<!-- sidebar -->
<?php
include 'slicing/sidebar.php'
?>
<main class="main">
	<div class="container-fluid">
		<div class="row row--grid">
			<!-- main title -->
			<div class="col-12">
				<div class="main__title">
					<h2>Dashboard</h2>

					<a href="add-item.php" class="main__title-link">add Movies</a>
				</div>
			</div>
			<!-- end main title -->

			<!-- stats -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="stats">
					<span>Total Users</span>
					<p><?php

						$res = mysqli_query($con, 'select count(id) as c from users');
						$row = mysqli_fetch_assoc($res);
						echo $row['c'] < 10 ? '0' . $row['c'] : $row['c'];

						?></p>
					<i class="icon ion-ios-stats"></i>
				</div>
			</div>
			<!-- end stats -->

			<!-- stats -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="stats">
					<span>Total Movies</span>
					<p><?php

						$res = mysqli_query($con, 'select count(*) as c from movies');
						$row = mysqli_fetch_assoc($res);
						echo $row['c'] < 10 ? '0' . $row['c'] : $row['c'];

						?></p>
					<i class="icon ion-ios-film"></i>
				</div>
			</div>
			<!-- end stats -->

			<!-- stats -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="stats">
					<span>Threater</span>
					<p><?php

						$res = mysqli_query($con, 'select count(*) as c from theater');
						$row = mysqli_fetch_assoc($res);
						echo $row['c'] < 10 ? '0' . $row['c'] : $row['c'];

						?></p>
					<i class="icon ion-ios-chatbubbles"></i>
				</div>
			</div>
			<!-- end stats -->

			<!-- stats -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="stats">
					<span>Booking</span>
					<p><?php

						$res = mysqli_query($con, 'select count(*) as c from book_now');
						$row = mysqli_fetch_assoc($res);
						echo $row['c'] < 10 ? '0' . $row['c'] : $row['c'];

						?></p>
					<i class="icon ion-ios-star-half"></i>
				</div>
			</div>
			<!-- end stats -->
		</div>
	</div>
</main>