<?php
include 'config.php';

$sql="select * from users";

$rel=mysqli_query($con,$rel);

while($row=mysqli_fetch_assoc($res)){
echo $row['name'];
}
?>