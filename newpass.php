<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-in-container">
	<form action="#">
    <h1>New Password</h1>
    <input type="password" name="password" placeholder="Password" id="pass">
    <input type="checkbox" onclick="myFunction()">
    <input type="password" name="password" placeholder="Re-Password" id="re-pass">
  	<input type="checkbox" onclick="Function()">Show Password
	<button>Send</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-right">
			<h1>Password Update!</h1>
			<p>keep your password from anonymous</p>
		</div>
	</div>
</div>
</div>
<script>

function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function Function() {
  var y = document.getElementById("re-pass");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}
</script>

</body>
</html>
