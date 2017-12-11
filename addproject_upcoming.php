<?php



$con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());

$pid= $_POST['upid'];
$pname = $_POST['upname'];
$ptype = $_POST['uptype'];
$pintro=$_POST['upintro'];
$overview =$_POST['uoverview'];
$paddress =$_POST['upaddress'];


//$query="insert into projects(projectId,projectName,projectType,projectIntroText,overviewText,locationMapUrl,projectAddress) values($pid,'$pname','$ptype','$pintro','$overview','$locationurl','$paddress')";




  
	  $ulocation=$_FILES['ulocation']['name'];
		echo"</br><script>alert('location');</script>locimg=".$ulocation;          
	
  $uimgs=$_FILES['ufile']['name'];
		 echo"<script>alert('main img');</script>img=".$uimgs;



	
	//-------------------------------------



		$ulocation=$_FILES['ulocation']['name'];
  if (($_FILES['ulocation']['type']=='image/gif') || ($_FILES['ulocation']['type']=='image/jpeg') || ($_FILES['ulocation']['type']=='image/png') || ($_FILES['ulocation']['type']=='image/jpg'))
    {
      if($_FILES['ulocation']['error']>0)
      {
        echo "Error:".$_FILES['ulocation']['error']."<br>";
      }
      else
      {
     
        $target_dir1 = "images/upcoming/";
        $target_file1 = $target_dir1.basename($_FILES['ulocation']['name']);
        move_uploaded_file($_FILES['ulocation']['tmp_name'], $target_file1);
        $query2="insert into projects(projectId,projectName,projectType,projectIntroText,overviewText,locationMapUrl,projectAddress) values($pid,'$pname','$ptype','$pintro','$overview','$target_file1','$paddress')";

      
        $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
       echo "<script>window.location='adminpage.php'</script>";
      }
    }
    else {
      echo "location file is not image";


    }
	
	include 'upload_proimg_upcoming.php';
	
echo"Updates succesfully";

?>