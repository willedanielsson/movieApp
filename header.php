<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="header.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="script.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>	

<body>
	<div class="content">
		<header>
		<div class="logo">
			<img src="images/logo.png" height="100px" width="200px">
			<div id="logoRightDiv"></div>
		</div>
			<nav id="navigationMenu">
				<ul>
					<li><a href="home.php"><span>Home</span></a></li>
					<li><a href="movies.php"><span>Movies</span></a></li>
					<li><a href="shows.php"><span>Series</span></a></li>
				</ul>
			</nav>

			<div id="navigationMember">
				<div id="navRightBorder"></div>

				<span id="memberSpan">
					<?php echo($_SESSION['userEmail']);?>
				</span>
				<button id="logoutButton">
					Logout
				</button>

				<button id="myListButton">
					Watched
				</button>
				
			</div>

		</header>
