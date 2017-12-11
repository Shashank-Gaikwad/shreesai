<?php



$con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());

$name = $_POST['name'];

$about=$_POST['about'];

$query="update websitesettings set aboutUsText ='".$about."' where websiteName='".$name."' ";

if(!mysqli_query($con,$query))
echo 'error'.mysqli_error($con);
else
echo"Updates succesfully";




?>