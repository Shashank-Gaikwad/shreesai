<?php

$con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());

if($_GET)
{
		
	if($_GET['id'])
	{
		
		 $pid=$_GET['id'];
     	
         $query="select * from projectimages where projectimages.projectId=$pid";
		 
		 $result=mysqli_query($con,$query);
		 
		 while($ans=mysqli_fetch_array($result))
		 {
			 $img=$ans['imageUrl'];			 
			 
			 echo '<img src="'.$img.'" height=200 width=200/>';
		 }
	
	}
	
}


?>