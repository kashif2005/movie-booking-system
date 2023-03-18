<?php
include '../config.php';

$id=$_GET['id'];
$q="delete from category where category_id='$id'";

$res=mysqli_query($con,$q);
if($res){
    header("location:category.php");
}
else{
    echo "data not delete!";
}
?>