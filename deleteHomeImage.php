<?php
    $con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
    $delete_id=$_REQUEST['q'];
    //echo "alert($delete_id)";
    $q="select imageUrl from homepageimages where imageId=$delete_id";
    $r=mysqli_query($con,$q);
    while($ans=mysqli_fetch_array($r))
    {
      $delete_image=$ans['imageUrl'];
    }
    unlink($delete_image);

    $query="delete from homepageimages where imageId=$delete_id";
    $result=mysqli_query($con,$query);
    $query2="select imageId,imageUrl from homepageimages where location='carousel'";
    $result2=mysqli_query($con,$query2);

    //echo "<div id='menu2' class='tab-pane fade'>";
      echo "<h4>Home Page Settings</h4>";
      echo "Select images to view them in Carousel on Home Page<br>";
      echo "<div class='row'>";
      echo "<div class='col-md-12'>";
    while ($row=mysqli_fetch_array($result2))
    {
      $imageId=$row['imageId'];
      $imageUrl=$row['imageUrl'];
      echo "<div class=con>";
      echo "<img src=$imageUrl width='100px' height='70px'/>";
      echo "<td><center><button type='button' class='btn btn-primary btn-xs' id=$imageId onclick='deleteImage(this.id)'>Delete</button></center></td>";
      //echo "<td><button id=$imageId onclick='deleteImage(this.id)'>Delete</button></td>";
    //  echo "<input type='checkbox' class='checkbox' id='$imageId_array[$i]' value='$imageId_array[$i]'/>";

      echo "</div>";
    }
    echo "</div>";
    echo "</div>";
    echo "<br><form action='uploadfile.php' method='post' enctype='multipart/form-data'>";
    echo "<input type='file' name='file' id=file/><br>";
    //echo "<input type='submit' value='Upload'/>";
    echo "<button type='submit' class='btn btn-primary btn-sm'>Upload</button>";
    echo "</form>";
    //echo "<br><input type='button' value='Done' onclick='show()'>";
    echo "<br><button type='button' class='btn btn-primary btn-sm' onclick='show()'>Done</button>";
    //echo "</div><br>";


  echo "<script>window.location'adminpage.php'</script>";
?>
