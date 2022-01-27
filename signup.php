<?php include ("function.php"); $random_pass = randomPassword(); ?>
<html>
<head>
	<title>SignUp</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-in-container">
	<form action="signup-check.php" method="POST">
		<h1>Sign Up</h1>
	         <input type="text" name="name" placeholder="Full name">
					 <input type="text" name="address" placeholder="address">
					 <input type="text" name="phonenumber" placeholder="phonenumber">
					 <input type="text" name="email" placeholder="email">
	     	   <input type="password"
	                 name="password"
	                 placeholder="Password" id="myInput"><br>

									 <select class="form-select mb-3"
						          name="role"
						          aria-label="Default select example">
							  <option selected value="user">User</option>
						  </select>

	<input type="checkbox" onclick="myFunction()">Show Password


	<button name="sign_up">Sign Up</button>
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
			<p>Do you Have Account!</p>
			<button class="ghost" id="signUp"><a href="signin.php">Log In</a></button>
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
