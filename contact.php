 <?php
    include 'slicing/nav.php'

    ?>

 <!-- header-area-end -->


 <!-- main-area -->
 <main>

     <!-- breadcrumb-area -->
     <section class="breadcrumb-area breadcrumb-bg" data-background="img/images/2.jpg">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="breadcrumb-content">
                         <h2 class="title">Contact Us</h2>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Contact</li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- breadcrumb-area-end -->

     <!-- contact-area -->
     <section class="contact-area contact-bg" data-background="img/bg/contact_bg.jpg">
         <div class="container">
             <div class="row">
                 <div class="col-xl-8 col-lg-7">
                     <div class="contact-form-wrap">
                         <div class="widget-title mb-50">
                             <h5 class="title">Contact Form</h5>
                         </div>

                         <div class="contact-form">
                             <form method="POST">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <input type="text" name="name" placeholder="You Name *">
                                     </div>
                                     <div class="col-md-6">
                                         <input type="email" name="email" placeholder="You  Email *">
                                     </div>
                                 </div>
                                 <input type="text" name="subject" placeholder="Subject *">
                                 <textarea name="message" placeholder="Type Your Message..."></textarea>
                                 <button class="btn" name="btn">Send Message</button>
                             </form>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-4 col-lg-5">
                     <div class="widget-title mb-50">
                         <h5 class="title">Information</h5>
                     </div>
                     <div class="contact-info-wrap">
                         <p><span>Find solutions :</span> to common problems, or get help from a support agent industry's standard .</p>
                         <div class="contact-info-list">
                             <ul>
                                 <li>
                                     <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                     <p><span>Address :</span> W38 Park Road New York</p>
                                 </li>
                                 <li>
                                     <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                     <p><span>Phone :</span> (09) 123 854 365</p>
                                 </li>
                                 <li>
                                     <div class="icon"><i class="fas fa-envelope"></i></div>
                                     <p><span>Email :</span> support@movflx.com</p>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- contact-area-end -->

     <!-- map -->
     <div id="map" data-background="img/bg/map.jpg"></div>
     <!-- map-end -->

     <!-- newsletter-area -->
     <section class="newsletter-area newsletter-bg" data-background="img/bg/newsletter_bg.jpg">
     </section>
     <!-- newsletter-area-end -->

 </main>
 <!-- main-area-end -->
 <?php
    include 'slicing/footer.php';

    if (isset($_POST['btn'])) {

        extract($_POST);

        $q = "insert into contact values(null,'$name','$email','$subject','$message')";

        if (mysqli_query($con, $q)) {
            echo "<script>location.href='contact.php'</script>";
        } else {
            echo "<script>alert('data not uploded')</script>";
        }
    } else {
    }
    ?>