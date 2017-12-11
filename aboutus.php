<?php
	session_start();
?>
<?php
if (isset($_SESSION['username']))
{
//echo 'Welcome'.$_SESSION['username'];
//echo "Session is active";
header('Location: adminpage.php');
}
?>
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
	a{
		text-decoration: none;
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
		<div class="col-md-12">
		<img class="img-responsive" src="images/aboutus1.jpg" alt="contact us" width="1200px">
		</div>
	</div>
  
  	<div class="row">
  		<div class="col-md-8">
  			<br>
			<p>
			<?php
  			$query="select aboutUsText from websitesettings";
			$result=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($result))
			{
				//$str=$row['aboutUsText'];
				/*for($i=0;$i<strlen($str);$i++)
				{
					echo $str[$i];
					if($str[$i]=='.' && $str[$i+1]==' ' && $str[$i+2]==' ')
					{
						echo"</p>";
						echo"<p>";
					}
				}*/
				echo $row['aboutUsText'];
			}
			echo"</p>";
			?>
  		</div>
		
  		<div class="col-md-4 visible-lg">
  			<br>
  			<a href="completed.php"><button type="button" class="btn btn-primary btn-block">Completed Projects</button></a><br>
			<a href="ongoing.php"><button type="button" class="btn btn-primary btn-block">Ongoing Projects</button></a><br>
			<!--<a href="upcoming.php"><button type="button" class="btn btn-primary btn-block">Upcoming Projects</button></a><br>-->
			<br>
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
    		</div>
    		<div class="panel " style="background-color: #99b3ff">
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