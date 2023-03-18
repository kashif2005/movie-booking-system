 <?php
    include 'slicing/nav.php';
    if ($_SESSION["role"] == "user") {
    } else {
        echo "<script>location.href='admin/signin.php'</script>";
    }
    if (isset($_GET['movie'])) {
        $id = $_GET['movie'];
    } else {
        echo "<script>location.href='movie.php'</script>";
    }
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
                         <h2 class="title">Book Now</h2>
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Book Now</li>
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
                             <h5 class="title">Booking Form</h5>
                         </div>

                         <div class="contact-form">
                             <form method="POST">
                                 <div class="row">

                                     <div class="col-md-6">
                                         <?php
                                            $show = mysqli_query($con, "select * from show_time inner join  movies on movies.movie_id=show_time.movie_id where show_time.id=$id");
                                            $res = mysqli_fetch_assoc($show);
                                            ?>
                                         <input type="text" name="movie_name" value="<?= $res['movie_name']; ?>" placeholder="movie name *" readonly>
                                     </div>
                                     <div class="col-md-6">
                                         <input type="text" name="user_name" value="<?= $_SESSION['user_name'] ?>" placeholder="You Name *" readonly>
                                     </div>
                                     <div class="col-md-6">
                                         <input type="text" name="theater" value="<?= $res['theater_name']; ?>">
                                     </div>
                                     <div class="col-md-6">
                                         <input type="date" name="book_date" min="<?= date('Y-m-d') ?>" placeholder="date *">
                                     </div>
                                     <div class="col-md-6">

                                         <input type="text" readonly name="book_time" value="<?= $res['show_time']; ?>" placeholder="date *">
                                     </div>
                                     <div class="col-md-6">
                                         <!-- <input type="text" name="class" placeholder="class *"> -->
                                         <select name="class" class="form-control mb-4" id="cat" onchange="totalAmount()">
                                             <?php
                                                $dq = "select * from category";
                                                $requ = mysqli_query($con, $dq);
                                                while ($roww = mysqli_fetch_assoc($requ)) {
                                                ?>
                                                 <option value="<?= $roww['category_price'] ?>"><?= $roww['category_name'] ?></option>
                                             <?php } ?>
                                         </select>
                                     </div>
                                     <div class="col-md-6">
                                         <input type="number" name="seat" id="seat" onchange="totalAmount()" onkeyup="totalAmount()" placeholder="no of seat *">
                                     </div>
                                     <div class="col-md-6">
                                         <input type="number" name="children" id="child" onchange="totalAmount()" onkeyup="totalAmount()" placeholder="no of children  *">
                                     </div>
                                 </div>
                                 <div class="row">
                                     <button class="btn" name="btn">Book Now</button>
                                     <div class="col my-auto text-right">Total Amount <span id="total">000</span>
                                         <input type="hidden" id="mytotal" name="totalm">
                                     </div>
                                 </div>
                                 <script>
                                     function totalAmount() {
                                         var cat = document.getElementById("cat").value;
                                         var seat = document.getElementById("seat").value;
                                         var child = document.getElementById("child").value;
                                         document.getElementById("mytotal").value = parseInt(cat == '' ? 0 : cat) * (parseInt(seat == '' ? 0 : seat) + (parseInt(child == '' ? 0 : child) / 2));
                                         document.getElementById("total").innerHTML = parseInt(cat) * (parseInt(seat == '' ? 0 : seat) + (parseInt(child == '' ? 0 : child) / 2));
                                     }
                                 </script>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="newsletter-area newsletter-bg" data-background="img/bg/newsletter_bg.jpg">
     </section>
     <!-- newsletter-area-end -->

 </main>
 <!-- main-area-end -->
 <?php
    include 'slicing/footer.php';

    if (isset($_POST['btn'])) {

        extract($_POST);

        $q = "insert into book_now values(null,'$user_name','$theater','$book_date','$book_time','$movie_name','$class','$seat','$children','$totalm')";

        if (mysqli_query($con, $q)) {
            echo "<script>location.href='book-now.php'</script>";
        } else {
            echo "<script>alert('data not uploded')</script>";
        }
    } else {
    }
    ?>