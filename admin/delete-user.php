<?php
include '../config.php';

$id=$_GET['id'];
$q="delete from users where id='$id'";

$res=mysqli_query($con,$q);
if($res){
    header("location:users.php");
}
else{
    echo "data not delete!";
}
?>