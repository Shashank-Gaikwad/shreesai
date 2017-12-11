<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php
	$con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
?>
<html>
<head>
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



<div class="row">
	<div class="col-md-8">
		<h4>Completed Projects</h4>
		 <?php
		 	$query="select projects.projectId,projects.projectName,projectimages.imageUrl,projects.projectIntroText from projects,projectimages where projects.projectId=projectimages.projectId and projects.projectType='completed' and projectimages.isMainImage=1";
			$result=mysqli_query($con,$query);
			//$count=mysqli_num_rows($result);
			$count=0;
			$projectId_array=array();
			$projectName_array=array();
			$imageUrl_array=array();
			$projectIntroText_array=array();
			while($row=mysqli_fetch_array($result))
			{
				$projectId_array[$count]=$row['projectId'];
				$projectName_array[$count]=$row['projectName'];
				$imageUrl_array[$count]=$row['imageUrl'];
				$projectIntroText_array[$count]=$row['projectIntroText'];
				$count++;
			}

			for($i=0;$i<$count;$i++)
			{
				echo "<div class='row'>";
				echo "<div class='col-md-4'>";
				echo "<a href='CompletedDetails.php?id=$projectId_array[$i]'><img src='$imageUrl_array[$i]' class='img-responsive img-thumbnail'  width='250px' height='200px'/></a>";
				echo "</div>";
				echo "<div class='col-md-8'>";
				echo "<h4>$projectName_array[$i]</h4>";
				echo "$projectIntroText_array[$i]";
				echo "<a href='CompletedDetails.php?id=$projectId_array[$i]'>Read More..></a>";
				echo "</div>";
				echo "</div>";
				echo "<br>";
			}


		 ?>

		<br>
	</div>
	<div class="col-md-4 visible-lg">
  			<br>
  			<a href="completed.php"><button type="button" class="btn btn-primary btn-block">Completed Projects</button></a><br>
			<a href="ongoing.php"><button type="button" class="btn btn-primary btn-block">Ongoing Projects</button></a><br>
			<!--<a href="upcoming.php"><button type="button" class="btn btn-primary btn-block">Upcoming Projects</button></a><br>-->

			<div class="panel " style="background-color: #99b3ff">
				<div class="panel-heading"><b><span class="glyphicon glyphicon-earphone"></span>
					<?php
						$query="select mobileNumber1 from websitesettings";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo $row['mobileNumber1'];
						}
					?>
				</b></div>

				<div class="panel-heading"><b><span class="glyphicon glyphicon-envelope"></span>
					<?php
						$query="select emailId from websitesettings";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo $row['emailId'];
						}
					?>
				</b></div>
   				
    		</div>
  	</div>
</div>


</div>

<?php include 'footer.php'; ?>
</body>
</html>
