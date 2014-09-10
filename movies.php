<?php

session_start();
if(!isset($_SESSION["userEmail"])){
	header("location:index.php");
}
?>

<?php include("header.php"); ?>
<link rel="stylesheet" href="main.css">



		<div class="movieContent">
			<ul class="list">
				<?php
					require ("class_IMDB.php");
					require('connector.php');

					$userEmail = $_SESSION['userEmail'];


					$i = new Imdb(true);

					$mArr = $i->chart_top();
					// DEVELOP: Only grab the first ten
					//$output = array_slice($mArr, 0, 10);

					foreach ($mArr as $value):

						$movieTitle = $value->title;
						$movieRating = $value->rating;
						$movieImage = $value->image->url;
						$movieYear = $value->year;
						$movieId = $value->tconst;

						$checkIfMovieWatched = ("SELECT * FROM `watched_movies` WHERE 'test@test.com' = userEmail AND '$movieId' = movieID");
						$result = mysqli_query($connect, $checkIfMovieWatched);
						$numberOfRows = mysqli_num_rows($result);
						
						if($numberOfRows<1):
					?>

							<li id="<?php print_r($movieId)?>">
							
								<img class="movieListImage" src="<?php echo $movieImage;?>">
								<div class="movieListTitle">
									<h2><?php print_r($movieTitle)?></h2>
								</div>
								<div class="movieListRandY">
									<span class="fa fa-star"></span> <?php print_r($movieRating)?></br>
									<span class="fa fa-clock-o"></span> <?php print_r($movieYear)?></br>
								</div>
								<button class="watchedMovieButton"><span class="fa fa-eye"></span></button>
							</li>
						<?php endif; ?>
					<?php endforeach; ?>

					<div class="load">
				<a class="loadButton"id="loadMoreButton">
					<span class="fa fa-plus-circle"></span>
				</a>	
				<a class="loadButton" id="loadLessButton">
					<span class="fa fa-minus-circle"></span>
				</a>	
			</ul>
			
			<div class="movieFilter">
				<h1>Filter</h1>

			</div>
		
			

			</div>
		</div>
	</div>
</body>
</html>