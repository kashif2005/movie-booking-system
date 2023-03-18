<?php
include '../config.php';

$id=$_GET['id'];
$q="delete from theater where theater_id='$id'";

$res=mysqli_query($con,$q);
if($res){
    header("location:theater.php");
}
else{
    echo "data not delete!";
}
?>