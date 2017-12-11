<?php
 $con=mysqli_connect('182.50.133.85:3306','prasad','Prasad123','shreesai_test') or die(mysqli_connect_error());
  $n=$_POST['name'];
  $c=$_POST['contact'];
  $e=$_POST['email'];
  $q=$_POST['query'];
       //if(isset($_POST['g-recaptcha-response'])){
       //   $captcha=$_POST['g-recaptcha-response'];
       // }
        //if(!$captcha){
        // echo "<script>window.location='contactus.php?msg=captcha'</script>";
        //  exit;
        //}
        //$secretKey = "6LfI-BwTAAAAACoG9NEEvPs9BqmzDGsxBg4PHtf1";
        //$ip = $_SERVER['shreesai.info'];
        //$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        //$responseKeys = json_decode($response,true);
        //if(intval($responseKeys["success"]) !== 1) {
          //echo '<h2>You are spammer !';
        //} else {
          $query="insert into customerqueries(customerName,contactNumber,emailId,queryText) values('$n','$c','$e','$q')";
  //$result=mysqli_query($con,$query);
  if(mysqli_query($con,$query))
  {
    echo "<script>window.location='contactus.php?msg=success'</script>";
  }
  else
  {
    echo "<script>alert('insertion failed');</script>";
  }
      //  }
  
?>
