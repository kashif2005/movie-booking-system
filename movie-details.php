<?php
include 'slicing/nav.php';
$id = $_GET['movie'];
$res = mysqli_query($con, "select * from movies where movie_id=$id");
$row = mysqli_fetch_assoc($res);
?>
<!-- header-area-end -->


<!-- main-area -->
<main>

    <!-- movie-details-area -->
    <section class="movie-details-area" data-background="img/bg/movie_details_bg.jpg">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-xl-3 col-lg-4">
                    <div class="movie-details-img">
                        <img src="admin/img-uplode/<?php echo $row['movie_poster'] ?>" width="300px" alt="">
                        <a href="<?php echo $row['threter_link'] ?>" class="popup-video"><img src="img/images/play_icon.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="movie-details-content">
                        <h2><?= $row['movie_name'] ?></h2>
                        <div class="banner-meta">
                            <ul>
                                <li class="quality">

                                    <span>hd</span>
                                </li>
                                <li class="category">
                                    <a href="#"><?= $row['genres'] ?></a>

                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-calendar-alt"></i><?= $row['movie_year'] ?></span>
                                </li>
                            </ul>
                        </div>
                        <p>
                            <?= $row['movie_description'] ?></p>
                        <div class="movie-details-prime">
                            <ul>
                                <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                                <!-- <li class="streaming">
                                    <a href="<?php echo $row['threter_link'] ?>" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a>
                                </li> -->
                                <li class="watch"><a href="book-now.php?movie=<?= $id ?>" class="btn"><i class="fas fa-book"></i> Book Now</a></li>
                                <li class="watch"><a href="<?php echo $row['threter_link'] ?>" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="movie-details-btn">
                    <a href="" class="download-btn">Book Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- movie-details-area-end -->

    <!-- episode-area -->
    <section class="episode-area episode-bg" data-background="img/bg/episode_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="movie-episode-wrap">
                        <div class="episode-top-wrap">
                            <div class="section-title">
                                <span class="sub-title">SELECT ANYONE</span>
                                <!-- <h2 class="title">Theater</h2> -->
                            </div>
                            <!-- <div class="total-views-count">
                                <p>2.7 million <i class="far fa-eye"></i></p>
                            </div> -->
                        </div>
                        <div class="episode-watch-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <!-- <button class="btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="season">Season 2</span>
                                            <span class="video-count">5 Full Episodes</span>
                                        </button> -->
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <?php
                                                $dq = "select * from show_time inner join movies on show_time.movie_id=movies.movie_id where movies.movie_id=$id";
                                                $requ = mysqli_query($con, $dq);
                                                while ($roww = mysqli_fetch_assoc($requ)) {
                                                ?>
                                                    <li class="d-flex align-items-center">
                                                        <a href="#" class=""><i class="fas fa-video"></i><?php echo $roww['theater_name'] ?></a>
                                                        <span class="ml-4"><i class="far fa-clock"></i> <?php echo $roww['show_time'] ?></span>
                                                        <span class="duration ml-auto"><a href="book-now.php?movie=<?= $roww['id'] ?>" class="btn m-0 py-1 text-white">Book Now</a></span>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <h2 style="margin-top:50px">REVIEW FORM</h2>
                                    <?php
                                    if (isset($_SESSION["role"]) && $_SESSION["role"] == "user") { ?>

                                        <div class="contact-form">
                                            <form method="POST">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" name="user_name" readonly value="<?= $_SESSION["user_name"] ?>">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="email" name="user_email" placeholder="User Email *">
                                                    </div>
                                                    <div class="col-md-12 mb-4">
                                                        <select name="rateing" class="form-control">
                                                            <option value="1">1 Star</option>
                                                            <option value="2">2 Star</option>
                                                            <option value="3">3 Star</option>
                                                            <option value="4">4 Star</option>
                                                            <option value="5">5 Star</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <textarea name="message" placeholder="Type Your Message..."></textarea>
                                                <button class="btn" name="sign__btn">Send Reviews</button>
                                            </form>
                                        </div>
                                    <?php  } else { ?>
                                        <div class="contact-form">
                                            <p>Please Login first for leave Rating & Review.</p>
                                            <a href="admin/signin.php" class="btn" name="sign__btn">Sign in</a>
                                        </div>
                                    <?php  }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="episode-img">
                        <img src="admin/img-uplode/<?php echo $row['movie_poster'] ?>" alt="">
                    </div>
                </div>
            </div>
            <?php

            if (isset($_POST['sign__btn'])) {
                $user_name = $_POST['user_name'];
                $user_email = $_POST['user_email'];
                $rating = $_POST['rateing'];
                $message = $_POST['message'];
                $movie = $id;


                $q = "insert into reviews values(null,'$user_name ','$user_email','$rating','$message',$movie)";
                if (mysqli_query($con, $q)) {
                    echo "<script>location.href='movie.php';</script>";
                } else {
                    echo "<script>alert('Invalid Request')</script>";
                }
            }
            ?>

            <!-- tv-series-area -->
            <section class="ucm-area mt-5">
                <div class="container">
                    <div class="row align-items-end mb-55">
                        <div class="col-lg-6">
                            <div class="section-title text-center text-lg-left">
                                <span class="sub-title">CUSTOMER REVIEWS</span>
                                <h2 class="title">Reviews & Rating</h2>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                            <div class="ucm-active owl-carousel">
                                <?php
                                $dq = "select * from reviews where movie_id=$id";
                                $requ = mysqli_query($con, $dq);
                                while ($roww = mysqli_fetch_assoc($requ)) {
                                ?>
                                    <div class="movie-item mb-50 text-center" style="overflow: hidden;">
                                        <div class="movie-poster"><i class="fas fa-quote-left fa-2x"></i>
                                        </div>
                                        <div class="movie-content">
                                            <div class="top">
                                                <h5 class="title"><a href="#"><?= $roww['message'] ?></a></h5>
                                            </div>
                                            <div class="bottom">
                                                <ul class="justify-content-center">
                                                    <li>
                                                        <span class="mr-4"> <i class="far fa-star"></i> <?= $roww['rating'] ?></span>
                                                        <span class="duration"><i class="far fa-user"></i> <?= $roww['user_name'] ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- tv-series-area-end -->
        </div>
    </section>

    <section class="newsletter-area newsletter-bg" data-background="img/bg/newsletter_bg.jpg">

    </section>
    <!-- newsletter-area-end -->

</main>
<!-- main-area-end -->

<?php
include 'slicing/footer.php';

?>