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
	#vertical_line{
		border-left: solid #00cc00;
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
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body id="body">


<div class="container">
	<?php include 'header.php'; ?>
	<div class="row">
		<div class="col-md-12">
		<img class="img-responsive" src="images/contactus1.jpg" alt="contact us" width="1200px">
		</div>
<?php		if($_GET)
		{
			if($_GET['msg']=='success'){
			echo "<center><b><p class='bg-info'>Thank you for showing interest. Our representative will contact you soon. </p></b></center>";
                        }
                        else
                        if($_GET['msg']=='captcha'){
			echo "<center><b><p class='bg-warning'>Please select the captcha</p></b></center>";
                        }
		}
		?>
	</div>

<!-- 	<%
		if(request.getAttribute("msg") != null ){
			%><center><b><p class="bg-info"><%= request.getAttribute("msg")%></p></b></center><%
		}

		if(request.getAttribute("warning") != null ){
			%><center><b><p class="bg-danger"><%= request.getAttribute("warning")%></p></b></center><%
		}
	%>
 -->
	<br>
	<div class="row">
		<div class="col-md-4">
			<h4>Office Address :</h4>
			<p class="text-muted">
			<?php
				$query="select address from websitesettings";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result))
				{
					$str=$row['address'];
					for($i=0;$i<strlen($str);$i++)
					{
						echo $str[$i];
						if($str[$i]==',' || $str[$i]=='.')
							echo"<br>";
					}
					//echo $row['address'];
				}
			?></p>

			<br>

			<p class="text-muted"><b>Phone Number:</b>
				<?php
					$query="select mobileNumber1 from websitesettings";
					$result=mysqli_query($con,$query);
					while($row=mysqli_fetch_array($result))
					{
						echo $row['mobileNumber1'];
					}
				?>
			</p>
			<br>

			<p class="text-muted"><b>Email Id: </b>
				<?php
					$query="select emailId from websitesettings";
					$result=mysqli_query($con,$query);
					while($row=mysqli_fetch_array($result))
					{
						echo $row['emailId'];
					}
				?>
			</p>
		</div>

		<div class="col-md-8" id="vertical_line">
			<form class="form-horizontal" role="form" action="insertQuery.php" method="POST">
				<div class="form-group">
				<label class="control-label col-sm-2" for="name">Name:</label>
				<div class="col-sm-6">
        		<input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required>
      			</div>
				</div>
				<div class="form-group">
     			<label class="control-label col-sm-2" for="contact">Phone: </label>
      			<div class="col-sm-6">
        		<input type="text" name="contact" pattern="[0-9]{10}" class="form-control" id="contact" placeholder="Enter Contact Number" required>
      			</div>
    			</div>
    			<div class="form-group">
     			<label class="control-label col-sm-2" for="email">Email Id:</label>
      			<div class="col-sm-6">
        		<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email Id" required>
      			</div>
    			</div>
    			<div class="form-group">
     			<label class="control-label col-sm-2" for="query">Your Query:</label>
      			<div class="col-sm-6">
        		<textarea name="query" id="query" placeholder="Type Your Query Here" cols="48" rows="3"></textarea>
      			</div>
    			</div>
    			<!-- <div class="form-group">
     			<label class="control-label col-sm-2" for="query">Verify that you are a human</label>
      			<div class="col-sm-6">
        		<div class="col-md-8">
                         <div class="g-recaptcha" data-sitekey="6LfI-BwTAAAAABRq8s4zPeAFc8dIK3S6TlSp6ihY"></div>
                        <br></div>
      			</div>
    			</div> -->
    			<div class="form-group">
      			<div class="col-sm-offset-2 col-sm-10">
        		<button type="submit" class="btn btn-default">Submit</button>
      			</div>
    			</div>
			</form>

		</div>

	</div>
  	<br><br>

</div>

<?php include 'footer.php'; ?>
</body>
</html>
