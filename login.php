<?php

require("PasswordHash.php");

if($_GET["email"] && $_GET["password"]){

 require('connector.php');

	$userPassword = $_GET["password"];
	$userEmail = $_GET["email"];
	$hasher = new PasswordHash(8, false);

	$findUser = "SELECT password FROM users WHERE email='$userEmail'";
	if($result = mysqli_query($connect, $findUser)){

		$row = $result->fetch_row();
		$storedHash = $row[0];
	}

	$check = $hasher->CheckPassword($userPassword, $storedHash);

	if($check){
		session_start();
		$_SESSION['userEmail'] = $userEmail;

		header("Location: home.php");
	}else{
		print("Passwords didnt match");
	}


}

?>