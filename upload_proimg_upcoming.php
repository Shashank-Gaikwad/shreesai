<?php
  $conn=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());

	 
        $name=$_FILES['ufile']['name'];
		
		
if (($_FILES['ufile']['type']=='image/gif') || ($_FILES['ufile']['type']=='image/jpeg') || ($_FILES['ufile']['type']=='image/png') || ($_FILES['ufile']['type']=='image/jpg'))
    {
      if($_FILES['ufile']['error']>0)
      {
        echo "Error:".$_FILES['ufile']['error']."<br>";
      }
      else
      {
     
        $target_dir = "images/upcoming/";
        $target_file = $target_dir.basename($_FILES['ufile']['name']);
        move_uploaded_file($_FILES['ufile']['tmp_name'], $target_file);
       $query1="insert into projectimages(imageName,imageUrl,isMainImage,projectId) values('$name','$target_file',1,$pid)";
		
      
        $result1=mysqli_query($con,$query1) or die(mysqli_error($con));
        echo "<script>window.location='adminpage.php'</script>";
      }
    }
    else {
      echo "file is not image";
    }

?>