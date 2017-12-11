<?php
    $con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
    $delete_id=$_REQUEST['q'];
    //echo "alert($delete_id)";
    $query="delete from customerqueries where queryId=$delete_id";
    $result=mysqli_query($con,$query);
    $query2="select * from customerqueries";
    $result2=mysqli_query($con,$query2);
    //echo "<div class=col-md-8>";
    // echo "<div class=tab-content>";
    //echo "<div id=menu6 class=tab-pane fade>";
    echo "<h4>Customer Queries And shown Interests</h4>";
    echo "<div class=row>";
    echo "<div class=col-md-12>";
    echo "<div class=table-responsive>";
    echo "<table class=table table-hover>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>#</th>";
    echo "<th>Name</th>";
    echo "<th>Phone No</th>";
    echo "<th>Email</th>";
    echo "<th>Query</th>";
    echo "<th></th>";
    echo "</tr>";echo "</div>";
    echo "</thead>";
    echo "<tbody>";
    while ($row=mysqli_fetch_array($result2))
    {
      echo "<tr>";
      $queryId=$row['queryId'];
        echo "<td>".$row['queryId']."</td>";
        echo "<td>".$row['customerName']."</td>";
        echo "<td>".$row['contactNumber']."</td>";
        echo "<td>".$row['emailId']."</td>";
        echo "<td>".$row['queryText']."</td>";
        echo "<td><button id=$queryId onclick='deleteRecord(this.id)'>Delete</button></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    //echo "</div>";
    //echo "</div>";
    // echo "</div>";

  echo "<script>window.location'adminpage.php'</script>";
?>
