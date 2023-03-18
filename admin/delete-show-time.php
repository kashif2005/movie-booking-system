<?php
include '../config.php';

$id = $_GET['id'];
$q = "delete from show_time where id='$id'";

$res = mysqli_query($con, $q);
if ($res) {
    header("location:show-time.php");
} else {
    echo "data not delete!";
}
