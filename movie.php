<?php
include 'slicing/nav.php';
if (isset($_GET['q'])) {
    $s = $_GET['q'];
    $dq = "select * from movies where movie_name like '%$s%' ";
} else {
    $dq = "select * from movies";
}
?>
<!-- header-area-end -->


<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="img/images/3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">Our <span>Movie</span></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Movie</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- movie-area -->
    <section class="movie-area movie-bg" data-background="img/bg/movie_bg.jpg">
        <div class="container">
            <div class="row align-items-end mb-60">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-left">
                        <span class="sub-title">ONLINE BOOKING</span>
                        <h2 class="title">New Release Movies</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="movie-page-meta">
                        <div class="tr-movie-menu-active text-center">
                            <button class="active" data-filter="*">Animation</button>
                            <button class="" data-filter=".cat-one">Movies</button>
                            <button class="" data-filter=".cat-two">Romantic</button>
                        </div>
                        <form action="#" class="movie-filter-form">
                            <select class="custom-select">
                                <option selected>English</option>
                                <option value="1">Blueray</option>
                                <option value="2">4k Movie</option>
                                <option value="3">Hd Movie</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row tr-movie-active">
                <?php
                $requ = mysqli_query($con, $dq);
                while ($roww = mysqli_fetch_assoc($requ)) {
                ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                        <div class="movie-item movie-item-three mb-50">
                            <div class="movie-poster">
                                <img src="admin/img-uplode/<?php echo $roww['movie_poster'] ?>" height="300px" alt="">
                                <ul class="overlay-btn">
                                    <li class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li><a href="<?php echo $roww['threter_link'] ?>" class="popup-video btn">Watch Now</a></li>
                                    <li><a href="movie-details.php?movie=<?php echo $roww['movie_id'] ?>" class="btn">Details</a></li>
                                </ul>
                            </div>
                            <div class="movie-content">
                                <div class="top">
                                    <h5 class="title"><a href="movie-details.php?movie=<?php echo $roww['movie_id'] ?>"><?php echo $roww['movie_name'] ?></a></h5>
                                    <span class="date"><?php echo $roww['movie_year'] ?></span>
                                </div>
                                <div class="bottom">
                                    <ul>
                                        <li><span class="quality">hd</span></li>
                                        <li>
                                            <span class="duration"><i class="far fa-clock"></i> 128 min</span>
                                            <span class="rating"><i class="fas fa-thumbs-up"></i> 3.5</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- movie-area-end -->

    <!-- newsletter-area -->
    <section class="newsletter-area newsletter-bg" data-background="img/bg/newsletter_bg.jpg">

    </section>
    <!-- newsletter-area-end -->

</main>
<!-- main-area-end -->

<?php
include 'slicing/footer.php'
?>