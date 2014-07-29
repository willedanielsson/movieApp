<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
	<div class="left">
	</div>

	<div class="movieContent">
		<ul>
			<?php
			include("imdbHax.php");
				$i = new Imdb();
				$mArr = $i->getTop250();
				$output = array_slice($mArr, 0, 10);?>
				<?php foreach ($output as $value): ?>
					<?php foreach ($value as $key =>$movieInfo): ?>
						<?php if($key==='title'): ?>
							<li>
								<img src="http://lorempixum.com/100/100/nature/1">	
								<h3><?= $movieInfo?></h3>
								<p>HUehuehueheu</p>
							</li>
						<?php endif; ?>	
					<?php endforeach; ?>
				<?php endforeach; ?>
			
		<ul>
	</div>
</body>
</html>