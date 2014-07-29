<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="header.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
 	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  	<script src="script.js"></script>
</head>

<body>
	<div class="content">
		<header>
		<div class="logo">
			<img src="images/logo.png" height="100px" width="200px">
			<div id="unDiv"></div>
		</div>
			<nav id="navigationMenu">
				<ul>
					<li class="active"><a href="#"><span>Home</span></a></li>
					<li><a href="#"><span>Movies</span></a></li>
					<li><a href="#"><span>Series</span></a></li>
				</ul>
			</nav>

			<div id="navigationMember">
			<div id="apa">
			</div>
				<button id="popButtonOpener" onclick="toggleVisibility('loginPop')">
					Login
				</button>

				<div id="loginPop">
					<h1>Login</h1>
						<form id="loginForm" action="login.php" method="get" accept-charset="UTF-8">
							<input type="email" name="email" id="email" maxlength="50" />
							<input type="password" name="password" id="password" maxlength="50" />
							<input type="submit" name="Submit" value="Login" id="submit"/>
						</form>
				</div>

			</div>

		</header>