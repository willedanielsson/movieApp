<?php

session_start();
if(!isset($_SESSION["userEmail"])){
	header("location:index.php");
}
?>

<?php include_once("header.php"); ?>
<link rel="stylesheet" href="main.css">



		<div class="movieContent">
			<ul>
				<?php
				include("imdbHax.php");
					$i = new Imdb();
					$mArr = $i->getTop250();
					// DEVELOP: Only grab the first ten
					$output = array_slice($mArr, 0, 10);?>
					<?php foreach ($output as $value):
					print_r($value)
					?>

						<li>
							<h3><?php print_r(array_values($value)[1])?></h3>
							<img src="http://lorempixum.com/100/100/nature/1">	
							<h3><?php print_r(array_values($value)[2])?></h3>
							<p>HUehuehueheu</p>
						</li>
					<?php endforeach; ?>			
			</ul>
		</div>
	</div>
</body>
</html>