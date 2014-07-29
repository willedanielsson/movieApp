<?php

require("PasswordHash.php");

if($_GET["email"] && $_GET["password"]){

	$servername ="localhost";
	$username = "root";
	$password = "";
	$connect = mysqli_connect($servername, $username, $password, "members");

	$userPassword = $_GET["password"];
	$hasher = new PasswordHash(8, false);

	$findUser = "SELECT password FROM users WHERE email='$_GET[email]'";
	if($result = mysqli_query($connect, $findUser)){

		$row = $result->fetch_row();
		$storedHash = $row[0];
	}

	$check = $hasher->CheckPassword($userPassword, $storedHash);

	if($check){
		header("Location: main.php");
	}else{
		print("Passwords didnt match");
	}


}

?>