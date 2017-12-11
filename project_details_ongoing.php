<?php

//$con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
$con=mysqli_connect('localhost','root','','shreesai_test') or die(mysqli_connect_error());

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
	
echo'	
<form name="myForm" action="add_detailimg.php" method="POST" enctype="multipart/form-data">
<center></br><h4>Upload other Image:</h4><input type="file" name="file" id="file"/> 
<input type="hidden" name="hidden" value="'.$pid.'"></br></br>
  
  <button  type="submit" value="Add" >Add</button>
    <button type="reset" value="Cancel">Cancel</button>

</form>
  <h4>Specifications:</h4>
  
	';
	
	$query1="select projects.projectSpecification from projects where projects.projectId=$pid";
	
	$result1=mysqli_query($con,$query1);
	
	while($ans1=mysqli_fetch_array($result1))
	{
		
		echo $specification=$ans1['projectSpecification'];
		//echo $specification;
	}
	
	echo'
	<!--add more specification:<input type="text" name="addspecifiction" id="addspecifiction"></br></br>-->
	
	
	</center>
	';
	
	}
	
}


?>