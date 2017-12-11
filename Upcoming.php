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
		<h4>Upcoming Projects</h4>
		<div class="row">
			<div class="col-md-4">
				<!--<a href=""><img src="images/one.jpg" class="img-responsive img-thumbnail"  width="250px" height="200px"/></a>-->
                                       <a href=""><img src="images/upcoming/comingsoon.png" class="img-responsive img-thumbnail"  width="250px" height="200px"/></a>
			</div>
		<!--	<div class="col-md-4">
				<a href=""><img src="images/three.jpg" class="img-responsive img-thumbnail"  width="250px" height="200px"/></a>
			</div>
                        <div class="col-md-4">
				<a href=""><img src="images/four.jpg" class="img-responsive img-thumbnail"  width="250px" height="200px"/></a>
			</div>-->
		</div>
		<br>
	</div>
	<div class="col-md-4 visible-lg">
  			<br>
  			<a href="completed.php"><button type="button" class="btn btn-primary btn-block">Completed Projects</button></a><br>
			<a href="ongoing.php"><button type="button" class="btn btn-primary btn-block">Ongoing Projects</button></a><br>
			<a href="upcoming.php"><button type="button" class="btn btn-primary btn-block">Upcoming Projects</button></a><br>
			
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