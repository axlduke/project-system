<?php
session_start();
include "db_connect.php";

if(isset($_POST['sign_up'])){

	$name = $_POST['name'];
	$address = $_POST['address'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = $_POST['role'];

	$query =mysqli_query($conn, "SELECT * FROM registration WHERE email = '$email'");
	if(mysqli_num_rows($query) > 0){
		echo '<script>window.alert("Email is already taken")</script>';
		echo "<script>window.history.go(-1);</script>";
	}
	else{

	$query = "INSERT INTO registration VALUES ('','$name','$address','$phonenumber','$email','$password','$code','$role')";

	if($conn->query($query) === TRUE){

	  echo '<script>window.alert("Data Inserted Successfully")</script>';
		echo "<script>window.history.go(-1);</script>";

	}else{
		echo '<script>window.alert("ERROR!")</script>';
	 }
 }
}
