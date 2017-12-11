<?php
  $conn=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());

	 
        $name=$_FILES['cfile']['name'];
		
		
if (($_FILES['cfile']['type']=='image/gif') || ($_FILES['cfile']['type']=='image/jpeg') || ($_FILES['cfile']['type']=='image/png') || ($_FILES['cfile']['type']=='image/jpg'))
    {
      if($_FILES['cfile']['error']>0)
      {
        echo "Error:".$_FILES['cfile']['error']."<br>";
      }
      else
      {
     
        $target_dir = "images/completed/";
        $target_file = $target_dir.basename($_FILES['cfile']['name']);
        move_uploaded_file($_FILES['cfile']['tmp_name'], $target_file);
       $query1="insert into projectimages(imageName,imageUrl,isMainImage,projectId) values('$name','$target_file',1,$pid)";
		
      
        $result1=mysqli_query($con,$query1) or die(mysqli_error($con));
        echo "<script>window.location='adminpage.php'</script>";
      }
    }
    else {
      echo "file is not image";
    }

?>