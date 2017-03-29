<!doctype html>
<!-- 
    Jay Verma
	Q12027103
	
	Login page
	
	All images used are royalty free, downloaded from: https://www.pexels.com 
-->
<html lang="en">
<head>
  <!-- Ensures the document is using the correct char set --> 
  <meta charset="utf-8">
  <meta name="description" content="TripsWiki">
  
  <!-- Using viewport in case of use on a mobile device -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>TripsWiki</title>
  
  <!-- Link to css/stylesheet -->
  <link rel="stylesheet" href="css/stylesheet.css?v=1.0">
  
  <!-- favicon image for tab -->
  <link rel="icon" type="images/favicon.jpeg" href="images/favicon.jpeg">

    
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  </head>

<body id="body">    

<div class="row">
	<div class="col-12">
		<div id="header">
			<a href="index.php"><h1>TripsWiki</h1></a>
				<ul id="navlinks">
					<li><a href="index.php">Home</a></li>
					<li><a href="login.php" id="active">Login/Register</a></li>
				</ul>
		</div> <!-- [END]#header -->
	</div> <!--[END]#col-12 -->
</div> <!--[END]#row -->

<div class="row">
	<div class="col-12">
		<div class="col-3">
			<span id="separator">Separator</span>
		</div><!--[END]#col-3 -->
		<div class="col-6">
			<div id="login">
				<h2 id="h2"> Login </h2>
					<form id="loginForm" method="post">
						<fieldset>
							<legend class="legend"> Enter your username and password </legend>
								<p class="formfield"><label>Username:<input type="text" name="u_name" id="u_name"></label></p>
								<p class="formfield"><label>Password:<input type="text" name="p_word" id="p_word"></label></p>
						</fieldset>
							<input type="submit" id="submit">
					</form>
					<form id="forgotPasswordForm" method="post">
						<fieldset>
							<legend class="legend"> Enter your username and new password </legend>
								<p class="formfield"><label>Username:<input type="text" name="u_name" id="u_name"></label></p>
								<p class="formfield"><label>New password:<input type="text" name="p_word" id="p_word"></label></p>
						</fieldset>
							<input type="submit" id="submit">
					</form>
					<form id="registerForm" method="post" action="php/register.php">
						<fieldset>
							<legend class="legend"> Choose a username and password </legend>
								<p class="formfield"><label>Enter a username:<input type="text" name="u_name" id="u_name"></label></p>
								<p class="formfield"><label>Enter a password:<input type="text" name="p_word" id="p_word"></label></p>
						</fieldset>
							<input type="submit" id="submit">
					</form>
					<p id="forgotPassword"><a href="#" onClick="resetPw()">Forgot password? </a></p>
					<p id="cancelChangePassword"><a href="login.php">Cancel</a></p>
					<p id="registerHere"><a href="#" onClick="register()">Register here!</a></p>
						
						
						<script>
						
							// global vars
							
							var forgotPasswordForm = document.getElementById('forgotPasswordForm');
							var loginForm = document.getElementById('loginForm');
							var forgotPassword = document.getElementById('forgotPassword');
							var registerForm = document.getElementById('registerForm');
							
							
							// active functions
							loginForm.style.display = 'block';
							document.getElementById("active").style.color = "#001E2E";
							document.getElementById("cancelChangePassword").style.display = "none";
							
						
							// display reset password form
							
							function resetPw() {
					
								if (forgotPasswordForm.style.display == 'none'){
									forgotPasswordForm.style.display = 'block';
									loginForm.style.display = 'none';
									forgotPassword.style.display = 'none';
									document.getElementById("h2").innerHTML = "Change password";
									document.getElementById("cancelChangePassword").style.display = "block";
									document.getElementById("registerHere").style.display = "none";
									document.getElementById('login').style.backgroundColor = '#ccb3ff';
									
								}
								else {
									forgotPasswordForm.style.display = 'none';
									loginForm.style.display = 'block';
									
								}
								
							}
							
							function register(){
								
								if(registerForm.style.display == 'none'){
									registerForm.style.display = 'block';
									loginForm.style.display = 'none';
									forgotPasswordForm.style.display = 'none';
									document.getElementById("h2").innerHTML = "Register";
									document.getElementById("cancelChangePassword").style.display = "block";
									forgotPassword.style.display = 'none';
									document.getElementById("registerHere").style.display = "none";
									document.getElementById('login').style.backgroundColor = '#80ffbf';
									
								}
								else{
									registerForm.style.display = 'none';
									
								}
								
							}
							
							
							
							
						</script>
			</div> <!--[END]#login -->
		</div><!--[END]#col-6-->
		<div class="col-3">
			<span id="separator">Separator</span>
		</div><!--[END]#col-3 -->
	</div> <!--[END]#col-12 -->
</div> <!--[END]#row -->

<div class="row">
	<div class="col-12">
		<div id="footer">
			<h4> Jay Verma <br/> Q12027103 </h4>
		</div> <!--[END]#footer -->
	</div> <!--[END]#col-12 -->
</div> <!--[END]#row -->

</body>
</html>