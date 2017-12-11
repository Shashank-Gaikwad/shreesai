<?php
	$con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
?>

<div class="jumbotron">
	<div class=""row">
	<div class="col-md-2" >
			<?php
				$query="select logoUrl from websitesettings";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result))
				{
					 $logo=$row['logoUrl'];
				}
			?>
		<!--<img src="images/logo.jpg" class="img-responsive" width="150px" height="150px" />-->
		<img src="<?php echo $logo;?>" class="img-responsive" width="150px" height="150px" />
	</div>
	<div class="col-md-8" >
		<h1>Shree Sai Construction </h1>
	</div>
	<div class="col-md-2" >
		<span class="glyphicon glyphicon-phone-alt"></span><font style="color: green">
			<?php
				$query="select mobileNumber1 from websitesettings";
				$result=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($result))
				{
					echo $row['mobileNumber1'];
				}
			?>
		</font>
	</div>
	</div>
</div>
<br><br><br><br>
<nav class="navbar navbar-default" id="menubar">
  <div class="container-fluid" style="background-color: white;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="completed.php">Completed Projects</a></li>
          <li><a href="ongoing.php">Ongoing Projects</a></li>
        <!--  <li><a href="upcoming.php">Upcoming Projects</a></li> -->
        </ul>
      </li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>