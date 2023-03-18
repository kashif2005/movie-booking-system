<?php
include 'slicing/nav.php'

?>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/images/pexels-photo-4.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title"><span>THEATER</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Theater</li>
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
                                <h2 class="title">THEATERS</h2>
                            </div>
                        </div>
                        
                    </div>
                   
                    <div class="row tr-movie-active">
                    <?php
								$dq = "select * from theater";
								$requ = mysqli_query($con, $dq);
								while ($roww = mysqli_fetch_assoc($requ)) {
								?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item movie-item-three mb-50">
                               
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.php"><?php echo $roww['theater_name'] ?></a></h5>
                                        <span class="text"><?php echo $roww['theater_seat'] ?></span>
                                        <span class="text"></span>
                                        
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="text"><?php echo $roww['theater_address'] ?></span></li>
                                            <li>
                                            <span class="duration"><a href="#" class="btn ">Book Now</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
            
            <!-- movie-area-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area newsletter-bg" data-background="img/bg/newsletter_bg.jpg">
    
            </section>
            <!-- newsletter-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
      <?php
      include 'slicing/footer.php'
      ?>