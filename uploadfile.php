<?php
  $con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());

    if (($_FILES['file']['type']=='image/gif') || ($_FILES['file']['type']=='image/jpeg') ||($_FILES['file']['type']=='image/png') ||($_FILES['file']['type']=='image/jpg'))
    {
      if($_FILES['file']['error']>0)
      {
             echo "Error:".$_FILES['file']['error']."<br>";
      }
      else
      {
      //echo "hello";
      //echo"<script>alert('hello');</script>";

        $name=$_FILES['file']['name'];
        //echo "file name=".$_FILES['file']['name'];
        $target_dir = "images/";
        $target_file = $target_dir.basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
       /* $q="select * from homepageimages";
        $r=mysqli_query($con,$q);
        $r1=mysqli_num_rows($r);
        $id=$r1+1;
        echo"id=$id";*/
        $query="insert into homepageimages(imageName,imageUrl,location,isVisible) values('$name','$target_file','carousel',1)";
        $result=mysqli_query($con,$query) or die(mysqli_error($con));
        echo "<script>window.location='adminpage.php'</script>";
      }
    }
    else {
      echo "file is not image";
    }
/*
    $query2="select * from homepageimages where location='carousel'";
    $result2=mysqli_query($con,$query2);
    $image_count=mysqli_num_rows($result2);

    $query3="select imageId,imageUrl from homepageimages where location='carousel'";
    $result3=mysqli_query($con,$query3);
    $count=0;
    $imageId_array=array();
    $imageUrl_array=array();
    while($row=mysqli_fetch_array($result3))
    {
      $imageId_array[$count]=$row['imageId'];
      $imageUrl_array[$count]=$row['imageUrl'];
      $count++;
    }

    //echo "<div id='menu2' class='tab-pane fade'>";
      //echo "<h4>Home Page Settings</h4>";
    //  echo "Select images to view them in Carousel on Home Page<br>";
    echo"<div class='row'>";
    echo"<div class='col-md-12'>";
    for($i=0;$i<$count;$i++)
    {
      echo"<div class='con'>";
      echo"<img src=$imageUrl_array[$i] width='100px' height='70px'/>";
      echo "<input type='checkbox' class='checkbox' id=$imageId_array[$i] />";
      echo "</div>";
    }
    echo "</div>";
    echo "</div>";
    echo"<br><input type='button' value='Done'>";
  //  echo "</div><br>";
*/
?>
