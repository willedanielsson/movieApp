<?php
	require('connector.php');

	session_start();
	
	$movieID = $_POST['movieID'];
	$userEmail = $_SESSION['userEmail'];

	$addWatchedMovie = ("INSERT INTO watched_movies(`userEmail`, `movieID`) VALUES('$userEmail', '$movieID')");

	$result = mysqli_query($connect, $addWatchedMovie);

?>