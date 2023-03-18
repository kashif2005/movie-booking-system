<?php
include 'slicing/nav.php'
?>
<!-- end header -->
<?php
include 'slicing/sidebar.php'
?>

<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Users</h2>

                    <span class="main__title-stat">3,702 Total</span>

                    <div class="main__title-wrap">
                        <!-- filter sort -->
                        <div class="filter" id="filter__sort">
                            <span class="filter__item-label">Sort by:</span>

                            <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <input type="button" value="Date created">
                                <span></span>
                            </div>

                            <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">
                                <li>Date created</li>
                                <li>Pricing plan</li>
                                <li>Status</li>
                            </ul>
                        </div>
                        <!-- end filter sort -->

                        <!-- search -->
                        <form action="#" class="main__title-form">
                            <input type="text" placeholder="Find user..">
                            <button type="button">
                                <i class="icon ion-ios-search"></i>
                            </button>
                        </form>
                        <!-- end search -->
                    </div>
                </div>
            </div>
            <!-- end main title -->
            <div class="col-12">
                <div class="main__table-wrap mCustomScrollbar _mCS_2" style="overflow: visible;">
                    <div id="mCSB_2" class="mCustomScrollBox mCS-custom-bar2 mCSB_horizontal mCSB_outside" tabindex="0" style="max-height: none;">
                        <div id="mCSB_2_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px; width: 1050px; min-width: 100%; overflow-x: inherit;" dir="ltr">
                            <table class="main__table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>USER NAME</th>
                                        <th>EMAIL</th>
                                        <th>ROLE</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php

                                    $sql = "select * from users ";

                                    $res = mysqli_query($con, $sql);

                                    while ($row = mysqli_fetch_assoc($res)) {
                                    ?>
                                        <tr>
                                            <td>
                                                <div class="main__table-text"><?= $row['id'] ?></div>
                                            </td>
                                            <td>
                                                <div class="main__table-text"><?= $row['user_name'] ?></a></div>
                                            </td>
                                            <td>
                                                <div class="main__table-text"><?= $row['email'] ?></a></div>
                                            </td>
                                            <td>
                                                <div class="main__table-text"><?= $row['role'] ?></div>
                                            </td>
                                            <td>
                                                <div class="main__table-btns">
                                                    <a href="edit-user.php?id=<?= $row['id'] ?>" class="main__table-btn main__table-btn--view ">
                                                        <i class="icon ion-ios-create"></i>
                                                    </a>
                                                    <a href="delete-user.php?id=<?= $row['id'] ?>" class="main__table-btn main__table-btn--delete">
                                                        <i class="icon ion-ios-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="mCSB_2_scrollbar_horizontal" class="mCSB_scrollTools mCSB_2_scrollbar mCS-custom-bar2 mCSB_scrollTools_horizontal" style="display: block;">
                        <div class="mCSB_draggerContainer">
                            <div id="mCSB_2_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 30px; display: block; width: 812px; max-width: 913.333px; left: 0px;">
                                <div class="mCSB_dragger_bar"></div>
                                <div class="mCSB_draggerRail"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- users -->


            
    <!-- end users -->

    <!-- paginator -->
   
    <!-- end paginator -->
    </div>
    </div>
</main>
<!-- end main content -->

<!-- modal status -->
<div id="modal-status" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">Status change</h6>

    <p class="modal__text">Are you sure about immediately change status?</p>

    <div class="modal__btns">
        <button class="modal__btn modal__btn--apply" type="button">Apply</button>
        <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
    </div>
</div>
<!-- end modal status -->

<!-- modal delete -->
<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">User delete</h6>

    <p class="modal__text">Are you sure to permanently delete this user?</p>

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

<!-- Mirrored from hotflix.volkovdesign.com/admin/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Nov 2022 12:02:10 GMT -->

</html>