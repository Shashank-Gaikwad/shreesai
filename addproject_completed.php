<?php



$con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());

$pid= $_POST['cpid'];
$pname = $_POST['cpname'];
$ptype = $_POST['cptype'];
$pintro=$_POST['cpintro'];
$overview =$_POST['coverview'];
$paddress =$_POST['cpaddress'];
$specification=$_POST['cspecification'];

//$query="insert into projects(projectId,projectName,projectType,projectIntroText,overviewText,locationMapUrl,projectAddress) values($pid,'$pname','$ptype','$pintro','$overview','$locationurl','$paddress')";




  
	  $clocation=$_FILES['clocation']['name'];
		echo"</br><script>alert('location');</script>locimg=".$clocation;          
	
  $cimgs=$_FILES['cfile']['name'];
		 echo"<script>alert('main img');</script>img=".$cimgs;



	
	//-------------------------------------



		$clocation=$_FILES['clocation']['name'];
  if (($_FILES['clocation']['type']=='image/gif') || ($_FILES['clocation']['type']=='image/jpeg') || ($_FILES['clocation']['type']=='image/png') || ($_FILES['clocation']['type']=='image/jpg'))
    {
      if($_FILES['clocation']['error']>0)
      {
        echo "Error:".$_FILES['clocation']['error']."<br>";
      }
      else
      {
     
        $target_dir1 = "images/completed/";
        $target_file1 = $target_dir1.basename($_FILES['clocation']['name']);
        move_uploaded_file($_FILES['clocation']['tmp_name'], $target_file1);
        $query2="insert into projects(projectId,projectName,projectType,projectIntroText,overviewText,locationMapUrl,projectAddress,projectSpecification) values($pid,'$pname','$ptype','$pintro','$overview','$target_file1','$paddress','$specification')";

      
        $result2=mysqli_query($con,$query2) or die(mysqli_error($con));
       echo "<script>window.location='adminpage.php'</script>";
      }
    }
    else {
      echo "location file is not image";
    }
	
	include 'upload_proimg_completed.php';
	
echo"Updates succesfully";

?>