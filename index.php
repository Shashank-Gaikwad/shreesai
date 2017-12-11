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

	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  	}
  	#bussiness{
  		width: 350px;
  		height: 200px;
  	}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!--  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">-->

  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!--	<script src="lib/jquery-2.2.3.min.js"></script>-->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--	<script src="lib/js/bootstrap.min.js"></script>-->

  <script src="js/menubarscript.js"></script>
<script src="js/script.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="images/logo.jpg">
<title>Shree Sai Construction</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body id="body">


<div class="container">
<!--
<% if(request.getAttribute("reason")!=null){%>
		  <p class="bg-danger"> Incorrect UserName, Password or reCaptcha.
		  <a href='#' style="text-decoration: none;" data-toggle="modal" data-target="#myLoginModal">Click Here</a> to Try Again
		  </p>
<%}%>
-->
 <?php include 'header.php'; ?>

 <?php
	 $query="select imageUrl from homepageimages where location='carousel'and isVisible=1";
	 $count=0;
	 $image_array=array();
	 $result=mysqli_query($con,$query);
	 while($row=mysqli_fetch_array($result))
	 {
		 $image_array[$count]=$row['imageUrl'];
		 $count++;
	 }
		echo"<div id='myCarousel' class='carousel slide' data-ride='carousel'>";
		echo"<ol class='carousel-indicators'>";
			for($i=0;$i<$count;$i++)
			{
				if($i==0)
					echo "<li data-target='#myCarousel' data-slide-to=$i class='active'></li>";
				else
					echo "<li data-target='#myCarousel' data-slide-to=$i></li>";
			}
			echo "</ol>";

			echo "<div class='carousel-inner' role='listbox'>";
				for($i=0;$i<$count;$i++)
				{
					if($i==0)
					{
						echo "<div class='item active'>";
						echo "<img src=$image_array[$i] alt='Chania' width='260' height='245'>";
						echo "</div>";
					}
					else
					{
						echo "<div class='item'>";
						echo "<img src=$image_array[$i] alt='Chania' width='460' height='345'>";
						echo "</div>";
					}
				}
			echo "</div>";
			echo "<a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>";
	      echo "<span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>";
	      echo "<span class='sr-only'>Previous</span>";
	    echo "</a>";
	    echo "<a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>";
	      echo "<span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>";
	      echo "<span class='sr-only'>Next</span>";
	    echo "</a>";
		echo"</div>";
	?>







	<br>
	<div class="row">
		<div class="col-md-8">
			<h3>Welcome to Shree Sai Construction</h3>
			<h5>
			<?php
				$query="select homePageText from websitesettings";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result))
				{
					echo $row['homePageText'];
				}
			?>
			</h5>

			<div class="row">
				<div class="col-md-6" >
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
						<br><span class="glyphicon glyphicon-envelope"></span>
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
				<div class="col-md-6" >
					<div class="panel " style="background-color: #99b3ff">
   					    <div class="panel-heading"><h4><span class="glyphicon glyphicon-paste"></span><b><a href="contactus.php" style="color: black;"> Send Us Enquiry</a></b></h4></div>
    				</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<?php
				$query="select imageUrl from homepageimages where location='right'";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result))
				{
					 $card=$row['imageUrl'];
				}
			?>
			<img alt="bussiness card" src="<?php echo $card;?>" class="img-respomsive" id="bussiness">
		</div>
	</div>

</div>
<?php include 'footer.php'; ?>
</body>
</html>
