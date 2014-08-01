<?php

require("PasswordHash.php");

if($_GET["email"] && $_GET["password"]){

	$servername ="localhost";
	$serverUsername = "root";
	$serverPassword = "";
	$connect = mysqli_connect($servername, $serverUsername, $serverPassword, "members");

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

		header("Location: movies.php");
	}else{
		print("Passwords didnt match");
	}


}

?>