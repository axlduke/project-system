<?php
session_start();
include "db_connect.php";
?>
<html>
<head>
	<title>SignUp and Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-in-container">
	<form action="login.php" method="POST">
		<h1>Sign In</h1>
		<div class="social-container">
		<a href="#" class="social"><i class="fa fa-facebook"></i></a>
		<a href="#" class="social"><i class="fa fa-google"></i></a>
		<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
	</div>
	<span>or use your account</span>
	<input type="email" name="email" placeholder="Email Address" required>
	<input type="password" name="password" placeholder="Password" id="myInput" required>
	<label class="form-label">Select User Type:
		<select class="form-select" name="role">
			<option selected value="user">User</option>
				<option value="admin">Admin</option>
			</select>
</label>

  <input type="checkbox" onclick="myFunction()">Show Password
	<a href="forgotpassword.php">Forgot Your Password</a>

	<button name="sign_up">Sign In</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>To keep connected with us please login with your personal info</p>
			<button class="ghost" id="signIn">Log In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Tabaco Library Management</h1>
			<p>Create Account Here!</p>
			<button class="ghost" id="signUp"><a href="signup.php">Sign Up</a></button>
		</div>
	</div>
</div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>
