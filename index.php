<?php include_once "header2.php"; ?>
<link rel="stylesheet" type="text/css" href="index.css">
<!--
<body>
	<div class="content">
-->
		<div class="pagecontent">
			<div class="information">
				<div class="information_text">
					MyMovieList helps you decide what movie or TV serie to watch from IMDb's top lists.
					<!-- Become a member, filter your perfect toplist and start checking off your own top TV series or movie list!
					-->
				</div>

				<div class="information_list">
					<span class="fa fa-user"></span>
					<span class="information_list_headline">Become a member</span>
					<span class="information_list_text">in a matter of seconds</span>
				</div>

				<div class="information_list">
					<span class="fa fa-filter"></span>
					<span class="information_list_headline">Filter your perfect top list</span>
					<span class="information_list_text">from IMDb's movie lists</span>
				</div>

				<div class="information_list">
					<span class="fa fa-check"></span>
					<span class="information_list_headline">Start checking off</span>
					<span class="information_list_text">and always know what to watch</span>
				</div>
			</div>

			<div class="register">
				<h1>Become a member</h1>
				<h2>It's free and easy</h2>
				<form id="registerForm" action="register.php" method="get" accept-charset="UTF-8">
						<input type="email" name="email" id="email" maxlength="50" placeholder="Email" />
						<input type="password" name="password" id="password" maxlength="50" placeholder="Password"/>
						<input type="password" name="password" id="password2" maxlength="50" placeholder="Re-enter password"/>
						<input type="submit" name="Submit" value="Register" id="registerSubmit" />
				</form>
			</div>

			<div class="pagecontent_news">
			<div class="pagecontent_news_holder">
			<h1>What's new?</h1>
				<span class="fa fa-filter"></span>
				<span>MyMovieList is being developed for Android and iOS</span>
				</div>
			</div>

		</div>

	</div>

</body>

</html>