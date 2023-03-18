<?php include 'slicing/nav.php';
// include 'config.php';

?>
<!-- header-area-end -->

<!-- main-area -->
<main>

    <!-- banner-area -->
    <section class="banner-area banner-bg" data-background="img/images/pexels-photo-1.webp" alt="Logo">
        <div class="container custom-container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="banner-content">
                        <h6 class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.8s">Movie Booking System</h6>
                        <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1.8s">Watch <span>Trailers</span>, Theater, & More.</h2>
                        <div class="banner-meta wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1.8s">
                            <ul>
                                <li class="quality">
                                    <span>Pg 18</span>
                                    <span>hd</span>
                                </li>
                                <li class="category">
                                    <a href="#">Romance,</a>
                                    <a href="#">Drama</a>
                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-calendar-alt"></i> 2021</span>
                                    <span><i class="far fa-clock"></i> 128 min</span>
                                </li>
                            </ul>
                        </div>
                        <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="banner-btn btn popup-video wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1.8s"><i class="fas fa-play"></i> Watch Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->

    <!-- up-coming-movie-area -->

    <!-- up-coming-movie-area-end -->

    <!-- services-area -->
    <section class="services-area services-bg" data-background="img/bg/services_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="services-img-wrap">
                        <img src="img/images/PK-en-20221206-popsignuptwoweeks-perspective_alpha_website_large.jpg" alt="">
                        <a href="img/images/services_img.jpg" class="download-btn" download>Download <img src="fonts/download.svg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-content-wrap">
                        <div class="section-title title-style-two mb-20">
                            <span class="sub-title">Our Services</span>
                            <h2 class="title">Download Your Shows Watch Offline.</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of passages of lorem
                            Ipsum available, but the majority have suffered alteration in some injected humour.</p>
                        <div class="services-list">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-television"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Enjoy on Your TV.</h5>
                                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-video-camera"></i>
                                    </div>
                                    <div class="content">
                                        <h5>Watch Everywhere.</h5>
                                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- top-rated-movie -->
    <section class="top-rated-movie tr-movie-bg" data-background="img/bg/tr_movies_bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50">
                        <span class="sub-title">ONLINE BOOKING</span>
                        <h2 class="title">Latest Movies</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tr-movie-menu-active text-center">
                        <button class="active" data-filter="*">All</button>
                        <?php
                        $dq = "select DISTINCT country from movies";
                        $requ = mysqli_query($con, $dq);
                        while ($roww = mysqli_fetch_assoc($requ)) {
                        ?>
                            <button class="" data-filter=".<?php echo $roww['country'] ?>"><?php echo $roww['country'] ?></button>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row tr-movie-active">
                <?php
                $dq = "select * from movies order by movie_id desc limit 8";
                $requ = mysqli_query($con, $dq);
                while ($roww = mysqli_fetch_assoc($requ)) {
                ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer <?php echo $roww['country'] ?>">
                        <div class="movie-item mb-60">
                            <div class="movie-poster">
                                <a href="movie-details.php?movie=<?php echo $roww['movie_id'] ?>"><img src="admin/img-uplode/<?php echo $roww['movie_poster'] ?>" height="300px" alt=""></a>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.php?movie=<?php echo $roww['movie_id'] ?>"><?php echo $roww['movie_name'] ?></a></h5>
                                    <span class="date"><?php echo $roww['movie_year'] ?></span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">4k</span></li>
                                        <li>
                                            <!-- <span class="duration"><i class="far fa-clock"></i> 128 min</span> -->
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="text-center">

                <a href="movie.php" class="banner-btn btn">All Movies</a>
            </div>
        </div>
        </div>
    </section>
    <!-- top-rated-movie-end -->

    <!-- live-area -->
    <section class="live-area live-bg fix" data-background="img/bg/live_bg.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title title-style-two mb-25">
                        <span class="sub-title">ONLINE STREAMING</span>
                        <h2 class="title">Live Movie & TV Shows For Friends & Family</h2>
                    </div>
                    <div class="live-movie-content">
                        <p>Watching movies is one of the entertainment medium these days. People need to surf various website to watch trailers of the movies</p>
                        <div class="live-fact-wrap">
                            <div class="resolution">
                                <h2>HD 4K</h2>
                            </div>
                            <div class="active-customer">
                                <h4><span class="odometer" data-count="<?php

                                                                        $res = mysqli_query($con, 'select count(id) as c from users');
                                                                        $row = mysqli_fetch_assoc($res);
                                                                        echo $row['c'] < 10 ? '0' . $row['c'] : $row['c'];

                                                                        ?>"></span>+</h4>
                                <p>Current Users</p>
                            </div>
                        </div>
                        <a href="contact.php" class="btn"><i class="fas fa-play"></i> Contact</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="live-movie-img wow fadeInRight" data-wow-delay=".2s" data-wow-duration="1.8s">
                        <img src="img/images/PK-en-20221206-popsignuptwoweeks-perspective_alpha_website_large.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- live-area-end -->

    <!-- tv-series-area -->
    <section class="ucm-area ucm-bg" data-background="img/bg/ucm_bg.jpg">
        <div class="ucm-bg-shape" data-background="img/bg/ucm_bg_shape.png"></div>
        <div class="container">
            <div class="row align-items-end mb-55">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <span class="sub-title">CUSTOMER REVIEWS</span>
                        <h2 class="title">Reviews & Rating</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ucm-nav-wrap">
                        <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="tvShow-tab" data-toggle="tab" href="#tvShow" role="tab" aria-controls="tvShow" aria-selected="true">TV Shows</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="false">Movies</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="anime-tab" data-toggle="tab" href="#anime" role="tab" aria-controls="anime" aria-selected="false">Anime</a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tvShow" role="tabpanel" aria-labelledby="tvShow-tab">
                    <div class="ucm-active owl-carousel">

                        <?php
                        $dq = "select * from reviews";
                        $requ = mysqli_query($con, $dq);
                        while ($roww = mysqli_fetch_assoc($requ)) {
                        ?>
                            <div class="movie-item mb-50 text-center" style="overflow: hidden;">
                                <div class="movie-poster"><i class="fas fa-quote-left fa-2x"></i>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href=""><?= $roww['message'] ?></a></h5>
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

    <!-- newsletter-area -->
    <section class="newsletter-area newsletter-bg" data-background="img/bg/newsletter_bg.jpg">
    </section>
    <!-- newsletter-area-end -->

</main>
<!-- main-area-end -->

<!-- footer-area -->
<?php include 'slicing/footer.php'; ?>