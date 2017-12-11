<style>
a{
	text-decoration: none;
}
</style>
<div class="panel-footer">
	<center>
	<a href='index.php' style="text-decoration: none;">Home</a> |
	<a href='aboutus.php' style="text-decoration: none;">About Us</a> |
	<a href='ongoing.php' style="text-decoration: none;">Projects</a> |
	<a href='contactus.php' style="text-decoration: none;">Contact Us</a> |
	<a href='#' style="text-decoration: none;" data-toggle="modal" data-target="#myLoginModal">Admin Login</a> |
	<!--<a href='index.php' >Admin Login</a> |-->
	 Copyright &copy; 2016 Shree Sai Construction. Designed By: Neeta Tech
	 </center>
</div>
<head><script src='https://www.google.com/recaptcha/api.js'></script></head>

<div class="modal fade" id="myLoginModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Admin Login</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="login.php">
          	<div class="row">
          		<div class="col-md-2">UserName:</div>
          		<div class="col-md-6"><input type="text" name="username"></div>
          	</div><br>
          	<div class="row">
          		<div class="col-md-2">Password:</div>
          		<div class="col-md-6"><input type="password" name="password" /></div>
          	</div><br>
          	<div class="row">
          		<div class="col-md-8"><div class="g-recaptcha" data-sitekey="6LfI-BwTAAAAABRq8s4zPeAFc8dIK3S6TlSp6ihY"></div><br></div>
          	</div><br>
          	<div class="row">
          		<div class="col-md-4"><input type="submit" value="Login" name="bttLogin"></div>
          		<div class="col-md-4"><input type="button" value="Clear"></div>
          	</div>


          </form>
        </div>

      </div>
    </div>
  </div>
