<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
	$con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
?>
<html>
<head>
<script type="text/javascript">
	function image_click(image_id){
		var small_image = document.getElementById(image_id);
		small_image.setAttribute("border", "2px");

		var child = document.getElementById("myid");
		document.getElementById("image_div").removeChild(child);
		var image = document.createElement("img");
		image.setAttribute("height", "570");
		image.setAttribute("width", "820");
		image.setAttribute("class", "img-responsive");
		image.setAttribute("src", "images/completed/"+image_id);
		image.setAttribute("id", "myid");
		document.getElementById("image_div").appendChild(image);
	}
</script>
<style>
	.container{
		background-color: #eee;
	}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/menubarscript.js"></script>
<script src="js/script.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="icon" href="images/logo.jpg">
<title>Shree Sai Construction</title>
</head>
<body id="body">


<div class="container">
<?php include 'header.php'; ?>
<br><br>

	<?php
	if($_GET)
	{
		if($_GET['id'])
			$pid=$_GET['id'];

			echo "<div class='row'>";
			echo "<div class='col-md-9'>";
			echo "<ul class='nav nav-pills visible-xs-block'>";
			echo "<li class='active'><a data-toggle='pill' href='#home'>Overview</a></li>";
			echo "<li><a data-toggle='pill' href='#menu1'>Specifications</a></li>";
			echo "<li><a data-toggle='pill' href='#menu2'>Amenities</a></li>";
			echo "<li><a data-toggle='pill' href='#menu3'>Location</a></li>";
			echo "</ul>";

		echo "<div class='tab-content'>";
		echo "<div id='home' class='tab-pane fade in active'>";
		echo "<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>View Gallery</button>";
		echo "<h4>Overview</h4>";
		echo "<br>";
		$query="select overviewText from projects where projectId=$pid";
		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result))
		{
			echo $row['overviewText'];
		}
		echo "</div>";

		echo "<div id='menu1' class='tab-pane fade'>";
		echo "<div class='row'>";
		echo "<div class='col-md-12'><h3>Specifications</h3></div>";
		echo "</div>";
		echo "<div class='row'>";
		echo "<div class='col-md-6'>";
		$query2="select specificationText from specifications where projectId=$pid";
		$result2=mysqli_query($con,$query2);
		while($row2=mysqli_fetch_array($result2))
		{
			echo "<span class='glyphicon glyphicon-chevron-right'></span>";
			echo $row2['specificationText'];
			echo "<br/>";
		}
		echo "</div>";
		echo "</div>";
		echo "</div>";

		echo "<div id='menu2' class='tab-pane fade'>";
		echo "<h3>Amenities</h3>";
		echo "<div class='row'>";
		echo "<div class='col-md-6'>";
		$query3="select amenityText from amenities where projectId=$pid";
		$result3=mysqli_query($con,$query3);
		while($row3=mysqli_fetch_array($result3))
		{
			echo "<p><span class='glyphicon glyphicon-chevron-right'></span>";
			echo $row3['amenityText'];
			echo "</p>";
		}
		echo "</div>";
		echo "</div>";
		echo "</div>";

		echo "<div id='menu3' class='tab-pane fade'>";
		echo "<h3>Location Map</h3>";
		echo "<div class='row'>";
		echo "<div class='col-md-3'>";
		$query4="select projectName, projectAddress from projects where projectId=$pid";
		$result4=mysqli_query($con,$query4);
		while($row4=mysqli_fetch_array($result4))
		{
			$pname=$row4['projectName'];
                        $paddress=$row4['projectAddress'];
		}
		echo "Address:<br>";
		echo "$pname".", ";
		echo "$paddress";
		echo "</div>";

		$query5="select locationMapUrl from projects where projectId=$pid";
		$result5=mysqli_query($con,$query5);
		while($row5=mysqli_fetch_array($result5))
		{
			$map=$row5['locationMapUrl'];
		}
		echo "<div class='col-md-6'  style='border-style: solid;'>";
		echo "<img alt='' src='$map' height='300px' width='420px' data-toggle='modal' data-target='#mapModal'>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";

		echo "<div class='col-md-3 visible-lg' >";
	    echo "<ul class='nav nav-pills nav-stacked'>";
	    echo "<li class='active'><a data-toggle='pill' href='#home'>Overview</a></li>";
	    echo "<li><a data-toggle='pill' href='#menu1'>Specifications</a></li>";
//	    echo "<li><a data-toggle='pill' href='#menu2'>Amenities</a></li>";
	    echo "<li><a data-toggle='pill' href='#menu3'>Location</a></li>";
	  echo "</ul>";
	  echo "</div>";
	echo "</div>";
	}
	 ?>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gallery</h4>
        </div>
				<?php
					$query6="select imageUrl from projectimages where projectId=$pid and isMainImage=1";
					$result6=mysqli_query($con,$query6);
					while($row6=mysqli_fetch_array($result6))
					{
						$mainimage=$row6['imageUrl'];
					}
					echo "<div class='modal-body'>";
					echo "<div class='row'>";
					echo "<div class='col-md-12' id='image_div'>";
					echo "<img alt='img' src='$mainimage' class='img-thumbnail' id='myid'>";
					echo "</div>";
					echo "</div>";

					$query7="select imageName,imageUrl from projectimages where projectId=$pid";
					$result7=mysqli_query($con,$query7);
					$count=0;
					while($row7=mysqli_fetch_array($result7))
					{
						$otherimage[$count]=$row7['imageUrl'];
						$imagename[$count]=$row7['imageName'];
						$count++;
					}
					echo "<div class='row'>";
					echo "<div class='col-md-12'>";
					for($i=0;$i<$count;$i++)
					{
						echo "<img id='$imagename[$i]' alt='img' src='$otherimage[$i]' class='img-thumbnail' height='100px' width='100px' onclick='image_click(this.id)'>";
					}
					echo "</div>";
					echo "</div>";
					echo "</div>";
				?>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</div>



<div class="modal fade" id="mapModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Location Map</h4>
        </div>
        <div class="modal-body">
          <img alt="" src="<?php echo $map;?>" >
        </div>
      </div>
    </div>
  </div>


<?php include 'footer.php'; ?>
</body>
</html>
