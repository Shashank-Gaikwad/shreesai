<?php
    //$con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
$con=mysqli_connect('localhost','root','','shreesai_test') or die(mysqli_connect_error());

    $delete_id=$_REQUEST['q'];
    //echo "alert($delete_id)";
	$delete_image_array=array();
	$count=0;
	
	
	
	$q1="select projectimages.imageUrl from projectimages where projectimages.projectId=$delete_id";
    $r1=mysqli_query($con,$q1);
    while($row1=mysqli_fetch_array($r1))
    {
      $delete_image_array[$count]=$row1['imageUrl'];
	  $count++;
    }
	for($i=0;$i<$count;$i++)
	{
		unlink($delete_image_array[$i]);
	}
    
	$q2="select locationMapUrl from projects where projects.projectId=$delete_id";
	$r2=mysqli_query($con,$q2);
	while($row2=mysqli_fetch_array($r2))
	{
		$mapUrl=$row2['locationMapUrl'];
	}
	unlink($mapUrl);
    
	
	$q3="delete from projectimages where projectimages.projectId=$delete_id";
	$q4="delete from projects where projects.projectId=$delete_id";
	$r3=mysqli_query($con,$q3);
    $r4=mysqli_query($con,$q4);
	 echo "<script>window.location='adminpage.php'</script>";
?>

