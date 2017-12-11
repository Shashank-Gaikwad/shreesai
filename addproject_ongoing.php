<?php



//$con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
$con=mysqli_connect('localhost','root','','shreesai_test') or die(mysqli_connect_error());

$pid= $_POST['pid'];
$pname = $_POST['pname'];
$ptype = $_POST['ptype'];
$pintro=$_POST['pintro'];
$overview =$_POST['overview'];
$paddress =$_POST['paddress'];
$specification=$_POST['specification'];

//$query="insert into projects(projectId,projectName,projectType,projectIntroText,overviewText,locationMapUrl,projectAddress) values($pid,'$pname','$ptype','$pintro','$overview','$locationurl','$paddress')";

		echo"</br><script>alert('specif');</script>spec=".$specification;


  
	$location=$_FILES['location']['name'];
		echo"</br><script>alert('location');</script>locimg=".$location;          
	
  $imgs=$_FILES['file']['name'];
		 echo"<script>alert('main img');</script>img=".$imgs;



	
	//-------------------------------------



		$location=$_FILES['location']['name'];
  if (($_FILES['location']['type']=='image/gif') || ($_FILES['location']['type']=='image/jpeg') || ($_FILES['location']['type']=='image/png') || ($_FILES['location']['type']=='image/jpg'))
    {
      if($_FILES['location']['error']>0)
      {
        echo "Error:".$_FILES['location']['error']."<br>";
      }
      else
      {
     
        $target_dir1 = "images/ongoing/";
        $target_file1 = $target_dir1.basename($_FILES['location']['name']);
        move_uploaded_file($_FILES['location']['tmp_name'], $target_file1);
        $query2="insert into projects(projectId,projectName,projectType,projectIntroText,overviewText,locationMapUrl,projectAddress,projectSpecification) values($pid,'$pname','$ptype','$pintro','$overview','$target_file1','$paddress','$specification')";

      
        $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
      echo "<script>window.location='adminpage.php'</script>";
      }
    }
    else {
      echo "location file is not image";
    }
	
	include 'upload_proimg_ongoing.php';
	
echo"Updates succesfully";

?>