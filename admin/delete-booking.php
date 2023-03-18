<?php
include '../config.php';

$id=$_GET['id'];
$q="delete from book_now where id='$id'";

$res=mysqli_query($con,$q);
if($res){
    header("location:book-now.php");
}
else{
    echo "data not delete!";
}
?>