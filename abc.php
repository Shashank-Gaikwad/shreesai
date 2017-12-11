<?php



$con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());

$name = $_POST['name'];

$mob=$_POST['mob'];
$email=$_POST['email'];
$add=$_POST['address'];

$query="update websitesettings set mobileNumber1 ='".$mob."',emailId = '".$email."',address = '".$add."' where websiteName='".$name."' ";

if(!mysqli_query($con,$query))
echo 'error'.mysqli_error($con);
else
echo"Updates succesfully";




?>