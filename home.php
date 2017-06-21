<?php $movies= glob("moviedb/movie*")
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Rancid Tomatoes</title>

		<meta charset="utf-8" />
		<link href="css/home.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="banner">
			<img src="images/rancidbanner.png" alt="Rancid Tomatoes" />
		</div>

		<h1>Movie reviews</h1>
		
<div id="content">

	<ul>
		<?php  for($a=1; $a<=count($movies); $a++) { ?>
		<li>
			<?php $info= get_info("moviedb/movie$a") ?>

			<a class="link" href="movie.php?film=movie<?=$a?>">
			<img id="icon" src= <?=get_rating_image_path($info)?> />
			<?= get_title($info)?> </a>

		</li>
		<?php } ?>
			
	</ul>
</div>

<div id="footer">
	 2015 &copy; Rancid Tomatoes <img src="images/fresh.gif" alt="Fresh" />
</div>

<!-- ADD MOVIE -->
		<a class="more_movies" href="add_movie_form.php">
		More Movies </a>

	</body>
</html>

<?php
function get_info($folder) {
	return file($folder."/info.txt");
}

function get_title($info) {
	return $info[0]." (".$info[1].")";
}

function get_overall_rating($info) {
	return $info[2];
}

function get_overview_image_path($folder) {
	return $folder."/overview.png";
}

function get_overall_rating_image_path($info) {
	if ( get_overall_rating($info) >= 60 )
		return "images/freshlarge.png";
	return "images/rottenlarge.png";
}
function get_rating_image_path($info) {
	if ( get_overall_rating($info) >= 60 )
		return "images/fresh.gif";
	return "images/rotten.gif";
}
function get_overall_rating_image_alt($info) {
	if ( get_overall_rating($info) >= 60 )
		return "Fresh";
	return "Rotten";
}
?>