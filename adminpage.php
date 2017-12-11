<?php
	session_start();
?>

<!DOCTYPE html>
<?php
if (isset($_SESSION['username']))
{
//echo 'Welcome'.$_SESSION['username'];
}
else
{
  echo "Session is in active";
		header('Location: index.php');
}
?>
<?php $con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());?>
<html>
<head>
<script src="lib/jquery-2.2.3.min.js"> </script>
<script type="text/javascript">

	
	function submit_aboutus(){
      $(document).ready(function(){
			$('form').submit(function(event){
				//Form data variable created
				var formData = {
					name: $('input[name=name]').val(),
					about: $('input[name=about]').val()
				};
				//ajax call
				$.ajax({
					type: 'POST',
					url: 'aboutus1.php',
					data: formData,
					dataType: 'JSON'
				});
				
				//required to prevent normal form submission
				event.preventDefault();
			});
		});	  
	  alert("Update successfully");
	  
	}

	
      function aj()
	  {
		 		// var mobile1:$('input[name=mob]').val();
		 // var email1: $('input[name=email]').val();
		  
		  
		
			  
        $(document).ready(function(){
			$('form').submit(function(event){
				//Form data variable created
				var formData = {
					name: $('input[name=name]').val(),
					mob: $('input[name=mob]').val(),
				    email: $('input[name=email]').val(),
					address: $('input[name=address]').val()
				};
				//ajax call
				$.ajax({
					type: 'POST',
					url: 'abc.php',
					data: formData,
					dataType: 'JSON'
				});
				
				//required to prevent normal form submission
				event.preventDefault();
			});
		});	  
	    alert("Update successfully");
	  
	  }
	  
	  
	  
	  	function deleteRecord(id)
	{
		//alert(id);
		var xmlhttp;
		//var url='deleteQuery.php?button_id=id';
		if (window.XMLHttpRequest)
		{
				xmlhttp=new XMLHttpRequest();
		}
		xmlhttp.onreadystatechange=function()
		{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
						document.getElementById("menu6").innerHTML=xmlhttp.responseText;
				}
		}
		xmlhttp.open("POST","deleteQuery.php?q="+id,true);
		xmlhttp.send();
	}
	
	
	
	function addproject_ongoing()
	{
		
		
	 $(document).ready(function(){
			$('addopro').submit(function(event){
				//Form data variable created
				var formData = {

		                        pid:$('input[name=pid]').val(),
					            pname: $('input[name=pname]').val(),
                                ptype:$('input[name=ptype]').val(),
					            pintro: $('input[name=pintro]').val(),
                                overview:$('input[name=overview]').val(),    
                                paddress:$('input[name=paddress]').val(),
                                locationurl:$('input[name=locationurl]').val(),
                                specification:$('input[name=specification]').val()
 
				};
				//ajax call
				$.ajax({
					type: 'POST',
					url: 'addproject_ongoing.php',
					data: formData,
					dataType: 'JSON'
				});
				
				//required to prevent normal form submission
				event.preventDefault();
			});
		});	  
	  
	  	
		alert(specification);
		
	}
	
	
	function addproject_completed()
{

		
	 $(document).ready(function(){
			$('addcpro').submit(function(event){
				//Form data variable created
				var formData = {

		                        pid:$('input[name=cpid]').val(),
					            pname: $('input[name=cpname]').val(),
                                ptype:$('input[name=cptype]').val(),
					            pintro: $('input[name=cpintro]').val(),
                                overview:$('input[name=coverview]').val(),    
                                paddress:$('input[name=cpaddress]').val(),
                                specification:$('input[name=cspcecification]').val()                                               
				};
				//ajax call
				$.ajax({
					type: 'POST',
					url: 'addproject_completed.php',
					data: formData,
					dataType: 'JSON'
				});
				
				//required to prevent normal form submission
				event.preventDefault();
			});
		});	  
	  
	  	
		
}



function addproject_upcoming()
{
	

	 $(document).ready(function(){
			$('addupro').submit(function(event){
				//Form data variable created
				var formData = {

		                        pid:$('input[name=upid]').val(),
				            	pname: $('input[name=upname]').val(),
                                ptype:$('input[name=uptype]').val(),
					            pintro: $('input[name=upintro]').val(),
                                overview:$('input[name=uoverview]').val(),    
                                paddress:$('input[name=upaddress]').val(),
								specification:$('input[name=uspcecification]').val()
                                                                               
				};
				//ajax call
				$.ajax({
					type: 'POST',
					url: 'addproject_upcoming.php',
					data: formData,
					dataType: 'JSON'
				});
				
				//required to prevent normal form submission
				event.preventDefault();
			});
		});	  
	  
	
	
	
}


    /*  function show()
	{
		window.location='adminpage.php';
	}*/
	
	
	 function deleteImage(id)
	{
		//alert(id);
		var xmlhttp;
		//var url='deleteQuery.php?button_id=id';
		if (window.XMLHttpRequest)
		{
				xmlhttp=new XMLHttpRequest();
		}
		xmlhttp.onreadystatechange=function()
		{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
						document.getElementById("menu2").innerHTML=xmlhttp.responseText;
				}
		}
		xmlhttp.open("POST","deleteHomeImage.php?q="+id,true);
		xmlhttp.send();
	}
	
	function delete_project(id)
	{	
		//alert(id);
		var xmlhttp;
		//var url='deleteQuery.php?button_id=id';
		if (window.XMLHttpRequest)
		{
				xmlhttp=new XMLHttpRequest();
		}
		xmlhttp.onreadystatechange=function()
		{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
						document.getElementById("menu3").innerHTML=xmlhttp.responseText;
				}
		}
		xmlhttp.open("POST","delete_project.php?q="+id,true);
		xmlhttp.send();
	}
</script>

<style>
	.container{
		background-color: #eee;
	}

	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  	}
  	#menubar{
  		display: none;
  	}
  	.con { position: relative; width: 100px; height: 100px; float: left; margin-left: 10px; }
	.checkbox { position: absolute; bottom: 0px; right: 0px; }

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">-->
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!--<script src="lib/jquery-2.2.3.min.js"></script>-->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <!--<script src="lib/bootstrap/js/bootstrap.min.js"></script>-->
  <script src="js/menubarscript.js"></script>
<script src="js/script.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="icon" href="images/logo.jpg">
<title>Shree Sai Construction</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<div class="container">
<?php include 'header.php'; ?>




Welcome to Admin Portal |

<a href="login.php?action=logout">Logout</a>


<center><p class="bg-info" id="settings_success"></p></center>


<div class="row" style="background-color: #cccccc;">
	<div class="col-md-4">
	<br>
	<ul class="nav nav-pills nav-stacked">
    <li class="active"><a data-toggle="pill" href="#home">General Settings</a></li>
    <li><a data-toggle="pill" href="#menu1">About-Us Settings</a></li>
    <li><a data-toggle="pill" href="#menu2">Home Page Settings</a></li>
    <li><a data-toggle="pill" href="#menu3">Ongoing Projects</a></li>
    <li><a data-toggle="pill" href="#menu4">Completed Projects</a></li>
   <!-- <li><a data-toggle="pill" href="#menu5">Upcoming Projects</a></li>-->
    <li><a data-toggle="pill" href="#menu6">View Customer Queries</a></li>
  </ul>


	</div>



	<div class="col-md-8">
	<div class="tab-content">
	
    <div id="home" class="tab-pane fade in active">
     
		<form action="abc.php" method="POST">
			
			<div class="row"><br>
			<div class="col-md-4">Website Name</div>
			<div class="col-md-4"><input type="text" value="Shree Sai Construction" id="name" name="name" disabled="disabled"></div>
		</div><br>


		<?php
		
	     // $connc=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());	
		   $connc=mysqli_connect('localhost','root','','shreesai_test') or die(mysqli_connect_error());	
		  
		  $dataAdmin="select * from websitesettings";
          $dataAdmin1=mysqli_query($connc,$dataAdmin);
		  
		  while($dataAdmin2=mysqli_fetch_array($dataAdmin1))
		  {
          $mob=$dataAdmin2['mobileNumber1'];
          $email=$dataAdmin2['emailId'];
 		  $address=$dataAdmin2['address'];
		}
		
		echo'<div class="row">';
		echo '<div class="col-md-4">Mobile Number</div>';
		echo '<div class="col-md-4"><input type="text" value="'.$mob.'" id="mob" name="mob"></div>';
		echo'</div><br>';

			
		echo'<div class="row">';
		echo '<div class="col-md-4">Email Id</div>';
		echo'<div class="col-md-4"><input type="text" value="'.$email.'" id="email" name="email"></div>';
      	echo'</div><br>';
		
		echo'<div class="row">';
		echo'<div class="col-md-4">Office Address</div>';
		//echo'<div class="col-md-4"><textarea rows="4" cols="50" value="'.$address.'" id="address" name="address"></textarea></div>';
		echo'<div class="col-md-4"><input type="text" value="'.$address.'" name="address" id="address"></div>';
		echo'</div><br>';

        ?>			
		<div class="row">
		<div class="col-md-2"><button  value="update" onclick='aj()'>Update</button></div>
		<div class="col-md-2"><input type="button" value="Cancel"></div>
		</div><br>
		</form>
		
    </div>
	
	

    <div id="menu1" class="tab-pane fade">
     <div class="row">
      <div class="col-md-6">
      	<br/>
		
		<form action="aboutus1.php" method="POST">
			
			<div class="row"><br>
			<div class="col-md-4">Website Name</div>
			<div class="col-md-4"><input type="text" value="Shree Sai Construction" id="name" name="name" disabled="disabled"></div>
		</div><br>

      	<h4>About Us:</h4><br>
      	<!--<textarea rows="10" cols="90" id="aboutus_text">
           
      	</textarea>-->
        <?php
		//$conn1=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
		$conn1=mysqli_connect('localhost','root','','shreesai_test') or die(mysqli_connect_error());
		
		
		$dataAbout="select * from websitesettings";
        $dataAbout1=mysqli_query($conn1,$dataAbout);
	
	      while($dataAbout2=mysqli_fetch_array($dataAbout1))
		  {
			  
			  $about=$dataAbout2['aboutUsText'];
		  }
		echo'<input type="text" style="width: 600px;" name="about" id="about" value="'.$about.'"/>';
		 ?>
		 
		 </div>
      </div><br>
      <div class="row">
      		<div class="col-md-2"><button type="submit" value="Update" onclick="submit_aboutus()">Update</button></div>
      		<div class="col-md-2"><input type="button" value="Cancel"></div>
                 </form>      
      </div><br>
    </div>
	
	
	
	
      <div id='menu2' class='tab-pane fade'>
		<?php
			$query="select imageId,imageUrl from homepageimages where location='carousel'";
			$result=mysqli_query($con,$query);
			$count=0;
			$imageId_array=array();
			$imageUrl_array=array();
			while($row=mysqli_fetch_array($result))
			{
				$imageId_array[$count]=$row['imageId'];
				$imageUrl_array[$count]=$row['imageUrl'];
				$count++;
			}

      echo "<h4>Home Page Settings</h4>";
      echo "Select images to view them in Carousel on Home Page<br>";
      echo "<div class='row'>";
      echo "<div class='col-md-12'>";

					for($i=0;$i<$count;$i++)
					{
					//echo "$imageId_array[$i]=$imageUrl_array[$i]<br>";
					echo "<div class=con>";
			    echo "<img src='$imageUrl_array[$i]' width='100px' height='70px'/>";
					echo "<td><center><button type='button' class='btn btn-primary btn-xs' id=$imageId_array[$i] onclick='deleteImage(this.id)'>Delete</button></center></td>";
			  //  echo "<input type='checkbox' class='checkbox' id='$imageId_array[$i]' value='$imageId_array[$i]'/>";

					echo "</div>";

					}
					echo "</div>";
					echo "</div>";
					echo "<br><form action='uploadfile.php' method='post' enctype='multipart/form-data'>";
					echo "<input type='file' name='file' id=file/><br>";
					echo "<button type='submit' class='btn btn-primary btn-sm'>Upload</button>";
					//echo "<input type='submit' value='Upload'/>";
					echo "</form>";
					//echo "<br><button type='button' class='btn btn-primary btn-sm' onclick='show()'>Done</button>";

				?>
				</div><br>
    
	
	
	
	
	<div id="menu3" class="tab-pane fade">
      <h4>Manage Ongoing Projects</h4>
      <div class="row">
      	<div class="col-md-3">
             
			 
		
<!--Button tag for pop up-->
<button id="ongoing" name="ongoing" data-toggle="modal" data-target="#myModal">Add Project </button>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
		
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Project Details</h4>
        </div>

        <div class="modal-body">
          
          <div class="row">
     
  	<div class="col-md-12"><center>
           <form name="addopro" action="addproject_ongoing.php"  method="POST"  enctype="multipart/form-data">
			 <input type="text" name="pid" placeholder="Project Id"></br></br>
 			  <input type="text" name="pname" placeholder="Project Name"></br></br>
			  
			  <!--<textarea rows="10" cols="90" id="aboutus_text" >
			  Project Intro Text
			  </textarea>-->
			  <input type="text" name="ptype" placeholder="ptype"></br></br>
			  <input type="text" name="pintro" placeholder="pintro"></br></br>
              <input type="text" name="overview" placeholder="overview"></br></br>
			  <input type="text" name="paddress" placeholder="paddress"></br></br>
              <input type="text" name="specification" placeholder="specification"></br></br>
			  <h4> Upload location Image</h4>:</br><input type="file" name="location" id="location"></br></br></br>
		                
	          <h4>Upload Main Image</h4>:</br><input type="file" name="file" id="file"/></br></br>

                      <button  type="submit" value="Add" onclick="addproject_ongoing()">Add</button>
   			 <button type="reset" value="Cancel">Cancel</button>
		
			  </form></center>
			
          	</div>
          </div>
	
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
			 
			 
			 
			 
			 <?php
			// $conn2=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
			  $conn2=mysqli_connect('localhost','root','','shreesai_test') or die(mysqli_connect_error());
			 
			 $ak="select * from projects, projectimages where projects.projectId=projectimages.projectId and projects.projectType='ongoing' and projectimages.isMainImage=1";
             $ans=mysqli_query($conn2,$ak);			 
		
             while($ans1=mysqli_fetch_array($ans))
			 {
				 
				$id=$ans1['projectId'];
                $intro=$ans1['projectIntroText'];
                $img=$ans1['imageUrl'];				
				$det=$ans1['overviewText'];
	
				 
				 echo '<table border=4>';
				 echo '<tr><th>'.'Project_Id'.'</th><th>'.'Project_Name'.'</th><th>'.'Image'.'</th><th>'.'Details'.'</th><th>'.'Delete'.'</th></tr>';
				 echo '<tr><td>'.$id.'</td><td>'.$intro.'</td><td>'.'<img src='.$img.' height=100 width=100/>'.'</td><td>'

				 .'<a href="project_details_ongoing.php?id='.$id.'"><button id="detail" name="detail">Details</button></a>


</td><td>'.'<button id="'.$id.'" onclick="delete_project(this.id)">Delete</button></td></tr>';
				 echo '</table>';
				 
			 
			}
			 ?>

			 
		
      </div>
    </div>
</div>

	
	
<!--Completed Project start-->
	
    <div id="menu4" class="tab-pane fade">
      <h4>Manage Completed Projects</h4>
      <div class="row">
      	<div class="col-md-3">


		<!--Button tag for pop up-->
<button id="completed" name="completed" data-toggle="modal" data-target="#myModal3">Add Project </button>



<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
		
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Project Details</h4>
        </div>
        <div class="modal-body">
     
          <div class="row">
          	<div class="col-md-12"><center>
             <form name="addcpro" action="addproject_completed.php" method="POST" enctype="multipart/form-data">
			 <input type="text" name="cpid" placeholder="Project Id"></br></br>
 			  <input type="text" name="cpname" placeholder="Project Name"></br></br>
			  
			  <!--<textarea rows="10" cols="90" id="aboutus_text" >
			  Project Intro Text
			  </textarea>-->
			  <input type="text" name="cptype" placeholder="ptype"></br></br>
			  <input type="text" name="cpintro" placeholder="pintro"></br></br>
              <input type="text" name="coverview" placeholder="overview"></br></br>
			  <input type="text" name="cpaddress" placeholder="paddress"></br></br>
             <input type="text" name="cspcecification" placeholder="spcecification"></br></br>
			  <h4> Upload location Image</h4>:</br><input type="file" name="clocation" id="clocation"></br></br></br>
		                
	          <h4>Upload Main Image</h4>:</br><input type="file" name="cfile" id="cfile"/></br></br>

                      <button  type="submit" value="Add" onclick="addproject_completed()">Add</button>
   			 <button type="reset" value="Cancel">Cancel</button>
		
			  </form></center>

			
          	</div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <?php
			// $conn4=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
			  $conn4=mysqli_connect('localhost','root','','shreesai_test') or die(mysqli_connect_error());
			 
		 $aksh="select * from projects, projectimages where projects.projectId=projectimages.projectId and projects.projectType='completed' and projectimages.isMainImage=1";
             $ans3=mysqli_query($conn4,$aksh);			 
		
             while($ans5=mysqli_fetch_array($ans3))
			 {
				 
				$cid=$ans5['projectId'];
                $cintro=$ans5['projectIntroText'];
                $cimg=$ans5['imageUrl'];				
				$cdet=$ans5['overviewText'];
	
				 
				 echo '<table border=4>';
				 echo '<tr><th>'.'Project_Id'.'</th><th>'.'Project_Name'.'</th><th>'.'Image'.'</th><th>'.'Details'.'</th><th>'.'Delete'.'</th></tr>';
				 echo '<tr><td>'.$cid.'</td><td>'.$cintro.'</td><td>'.'<img src='.$cimg.' height=100 width=100/>'.'</td><td>'

				 .'<a href="project_detils_completed.php?id='.$cid.'"><button id="detail" name="detail">Details</button></a>


</td><td>'.'<button id="'.$cid.'" onclick="delete_project(this.id)">Delete</button></td></tr>';
				 echo '</table>';
				 
			 
			}
			 ?>




     	
        </div>
      </div>
    </div>





	
	
	
	<div id="menu5" class="tab-pane fade">
      <h4>Manage Upcoming Projects</h4>
      <div class="row">
      	<div class="col-md-3">

		
				<!--Button tag for pop up-->
<button id="upcoming" name="upcoming" data-toggle="modal" data-target="#myModal5">Add Project </button>



<div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
		
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Project Details</h4>
        </div>
        <div class="modal-body">
     
          <div class="row">
          	<div class="col-md-12"><center>
             <form name="addupro" action="addproject_upcoming.php" method="POST" enctype="multipart/form-data">
			 <input type="text" name="upid" placeholder="Project Id"></br></br>
 			  <input type="text" name="upname" placeholder="Project Name"></br></br>
			  
			  <!--<textarea rows="10" cols="90" id="aboutus_text" >
			  Project Intro Text
			  </textarea>-->
			  <input type="text" name="uptype" placeholder="ptype"></br></br>
			  <input type="text" name="upintro" placeholder="pintro"></br></br>
              <input type="text" name="uoverview" placeholder="overview"></br></br>
			  <input type="text" name="upaddress" placeholder="paddress"></br></br>
			  <input type="text" name="uspcecification" placeholder="spcecification"></br></br>
             <h4> Upload location Image</h4>:</br><input type="file" name="ulocation" id="ulocation"></br></br></br>
		                
	         <h4>Upload Main Image</h4>:</br><input type="file" name="ufile" id="ufile"/></br></br>

             <button  type="submit" value="Add" onclick="addproject_upcoming()">Add</button>
   			 <button type="reset" value="Cancel">Cancel</button>
		
			  </form></center>

			
          	</div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <?php
			 //$connt5=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
			 $connt5=mysqli_connect('localhost','root','','shreesai_test') or die(mysqli_connect_error());
			 
		 $akshay="select * from projects, projectimages where projects.projectId=projectimages.projectId and projects.projectType='upcoming' and projectimages.isMainImage=1";
             $ansr=mysqli_query($connt5,$akshay);			 
		
             while($ansr1=mysqli_fetch_array($ansr))
			 {
				 
				$uid=$ansr1['projectId'];
                $uintro=$ansr1['projectIntroText'];
                $uimg=$ansr1['imageUrl'];				
				$udet=$ansr1['overviewText'];
	
				 
				 echo '<table border=4>';
				 echo '<tr><th>'.'Project_Id'.'</th><th>'.'Project_Name'.'</th><th>'.'Image'.'</th><th>'.'Details'.'</th></tr>';
				 echo '<tr><td>'.$uid.'</td><td>'.$uintro.'</td><td>'.'<img src='.$uimg.' height=100 width=100/>'.'</td><td>'

				 .'<a href="project_detils_completed.php?id='.$uid.'"><button id="detail" name="detail">Details</button></a>


</td><td>'.'<button id="'.$uid.'" onclick="delete_project(this.id)">Delete</button></td></tr>';
				 echo '</table>';
				 
			 
			}
			 ?>

		
		
		
     	</div>
      </div>
    </div>
	
	
	
	
	
	
	
	<div id="menu6" class="tab-pane fade">
      <h4>Customer Queries And shown Interests</h4>
      <div class="row">
      	<div class="col-md-12">
     		<div class="table-responsive">
			  <table class="table table-hover">
			    <thead>
			      <tr>
			        <th>#</th>
			        <th>Name</th>
			        <th>Phone No</th>
			        <th>Email</th>
			        <th>Query</th>
			        <th></th>
			      </tr>
			    </thead>
			    <tbody>
				
				  <?php
					$query="select * from customerqueries";
					$result=mysqli_query($con,$query);
					while($row=mysqli_fetch_array($result))
					{
						$queryId=$row['queryId'];
						$customerName=$row['customerName'];
						$contactNumber=$row['contactNumber'];
						$emailId=$row['emailId'];
						$queryText=$row['queryText'];
						echo '<tr>';
							echo '<td>'.$queryId.'</td>';
							echo '<td>'.$customerName.'</td>';
							echo '<td>'.$contactNumber.'</td>';
							echo '<td>'.$emailId.'</td>';
							echo '<td>'.$queryText.'</td>';
							echo "<td><button id=$queryId onclick='deleteRecord(this.id)'>Delete</button></td>";
						echo '</tr>';
					}
				  ?>
			    </tbody>
			  </table>
  			</div>

     	</div>
      </div>
    </div>

  </div>


	</div>
</div>





</div>
<?php include 'footer.php'; ?>
</body>
</html>
