<?php
session_start();
include "db_connect.php";

if(isset($_POST['signIn'])){

	$email = ($_POST['email']);
	$password = ($_POST['password']);
	$role = ($_POST['role']);

	$sql = "SELECT * FROM registration WHERE username='".$email."' and password = '".$password."' and usertype='".$role."'";
  $result = mysqli_query($conn, $sql);
  if ($result) {
		while ($row = mysqli_fetch_array($result)) {
			echo '<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['role'].'")</script>';

		}
		if($role=="admin"){
			header ("Location: home.php");

				} else{
					header("Location: profile.php")
				}
	} else{
	echo 'no result';
   }
}
}
