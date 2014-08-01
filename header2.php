<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="header2.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="script.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>	

<body>
	<div class="content">
		<header>
		<div class="logo">
			<img src="images/logo.png" height="100px" width="200px">
			<div id="unDiv"></div>
		</div>

			<div id="navigationMember">
				<div id="apa"></div>
				<button id="popButtonOpener" onclick="toggleVisibility('loginPop')">
					Login
				</button>

				<div id="loginPop">
						<form id="loginForm" action="login.php" method="get" accept-charset="UTF-8">
							<input type="email" name="email" id="email" maxlength="50" placeholder="Email"/>
							<input type="password" name="password" id="password" maxlength="50" placeholder="Password"/>
							<input type="submit" name="Submit" value="Login" id="loginSubmit"/>
						</form>
				</div>

			</div>

		</header>
