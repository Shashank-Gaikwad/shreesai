<?php
 // $conn=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
	 $conn=mysqli_connect('localhost','root','','shreesai_test') or die(mysqli_connect_error());
 
        $name=$_FILES['file']['name'];
		$pid=$_POST['hidden'];
		//$specification=$_POST['addspecifiction'];
		
		
		//$query="insert into projects";
		
if (($_FILES['file']['type']=='image/gif') || ($_FILES['file']['type']=='image/jpeg') || ($_FILES['file']['type']=='image/png') || ($_FILES['file']['type']=='image/jpg'))
    {
      if($_FILES['file']['error']>0)
      {
        echo "Error:".$_FILES['file']['error']."<br>";
      }
      else
      {
     
        $target_dir = "images/detail_images/";
        $target_file = $target_dir.basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
       $query1="insert into projectimages(imageName,imageUrl,isMainImage,projectId) values('$name','$target_file',0,$pid)";
		
      
        $result1=mysqli_query($conn,$query1) or die(mysqli_error($conn));
      //  echo "<script>window.location='adminpage.php'</script>";
      }
    }
    else {
      echo "file is not image";
	  echo"</br>id=".$pid;
      echo"</br>file=".$name;	  
    }

?>