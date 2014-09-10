<?php

require("PasswordHash.php");

//CREATE TABLE `users` (
//`id` int(4) NOT NULL auto_increment,
//`username` varchar(65) NOT NULL default '',
//`password` varchar(65) NOT NULL default '',
//PRIMARY KEY (`id`);

if($_GET["email"] && $_GET["password"]){

	require('connector.php');

	$alreadyAMember = ("SELECT * FROM users WHERE email='$_GET[email]'");

	// Går alltid in
	if($result = mysqli_query($connect, $alreadyAMember)){

		$numberOfRows = mysqli_num_rows($result);

		// Om en användare finns
		//if($numberOfRows>0){
		if(5<2){
			printf("Finns redan användare. REdirect till start");
		}
		//Annars så skapar vi en
		else{

			//Hasha lösenord
			$hasher = new PasswordHash(8, false);
			$userPassword = $_GET["password"];

			//Creates a hash of 60 letters
			$hash = $hasher->HashPassword($userPassword);

			//Create user
			$sql = ("INSERT INTO users (email,password) VALUES ('$_GET[email]', '$hash')");
			$result = mysqli_query($connect, $sql);

			// Get user id
			$getUserId = ("SELECT id FROM `users` WHERE email='test@test.com'");

			header('Location: movies.php');
			}

	}

}// Om uppgifterna var tomma
?>