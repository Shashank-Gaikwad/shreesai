<?php
  //$conn=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
$conn=mysqli_connect('localhost','root','','shreesai_test') or die(mysqli_connect_error());

	 
        $name=$_FILES['file']['name'];
		
		
if (($_FILES['file']['type']=='image/gif') || ($_FILES['file']['type']=='image/jpeg') || ($_FILES['file']['type']=='image/png') || ($_FILES['file']['type']=='image/jpg'))
    {
      if($_FILES['file']['error']>0)
      {
        echo "Error:".$_FILES['file']['error']."<br>";
      }
      else
      {
     
        $target_dir = "images/ongoing/";
        $target_file = $target_dir.basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
       $query1="insert into projectimages(imageName,imageUrl,isMainImage,projectId) values('$name','$target_file',1,$pid)";
		
      
        $result1=mysqli_query($con,$query1) or die(mysqli_error($con));
      //  echo "<script>window.location='adminpage.php'</script>";
      }
    }
    else {
      echo "file is not image";
    }

?>