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
				require ("class_IMDB.php");
					$i = new Imdb(true);
					$mArr = $i->chart_top();
					// DEVELOP: Only grab the first ten
					$output = array_slice($mArr, 0, 10);?>
					<?php foreach ($output as $value):

						$movieTitle = $value->title;
						$movieRating = $value->rating;
						$movieImage = $value->image->url;
						$movieYear = $value->year;
						$movieId = $value->tconst;
							?>

						<li>
							
							<img class="movieListImage" src="<?php echo $movieImage;?>">
							<div class="movieListTitle">
								<h3><?php print_r($movieTitle)?></h3>
							</div>
							<div class="movieListRandY">
								<div class="movieListRating">
									<span><?php print_r($movieRating)?></span>
								</div>
								
								<p><?php print_r($movieYear)?></p>
								<a href="http://www.imdb.com/title/<?php echo $movieId;?>" target="_blank">Read more</a>
							</div>
							<button onclick="#"><span class="fa fa-eye"></span></button>
						</li>

					<?php endforeach; ?>
			</ul>
			
			<div class="movieFilter">
				<h1>Filter</h1>

			</div>

		</div>
	</div>
</body>
</html>