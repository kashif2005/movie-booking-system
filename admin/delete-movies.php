<?php
include '../config.php';

$id=$_GET['id'];
$q="delete from movies where movie_id='$id'";

$res=mysqli_query($con,$q);
if($res){
    header("location:movies.php");
}
else{
    echo "data not delete!";
}
?>