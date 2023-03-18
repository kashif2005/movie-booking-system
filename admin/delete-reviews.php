<?php
include '../config.php';

$id=$_GET['id'];
$q="delete from reviews where id='$id'";

$res=mysqli_query($con,$q);
if($res){
    header("location:reviews.php");
}
else{
    echo "data not delete!";
}
?>