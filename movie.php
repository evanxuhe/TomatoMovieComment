
<!DOCTYPE html>
<html>
<style>
</style>

	<head>
		<title>TMNT - Rancid Tomatoes</title>

		<meta charset="utf-8" />
		<link href="css/movie.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php
		# define the path to reach each movie's page
		# read the information and reviews into $inf and $review
		    $movie = $_GET["film"];
		    $inf= file("moviedb/$movie/info.txt");
		    $review= glob("moviedb/$movie/review*.txt");

		?>
		<div id="layout">
		<div id="Banner">
			<img src="images/rancidbanner.png" alt="Rancid Tomatoes" />
		</div>
		
		<h1><?=$inf[0]?>(<?=$inf[1]?>)
		    <a href="home.php">
			<img id= "backicon" src=images/goback.png 
			  title="go back to home!" /></a>

		</h1>
		

		<div id="block">

		<div id="LeftSection"> 

		<div id="SubBanner">

			<?php if( $inf[2]>=60 ) { ?>
			<img  src="images/freshlarge.png" alt="general overview_l" />
		    <?php } else{  ?>
		    <img  src="images/rottenlarge.png" alt="general overview_l" />

		<?php } ?>
		<?=$inf[2]?>%	
		
								
		</div>


		<div id="dialog">
		<?php  
		# add reviews into the left part
		
		for($a=1;$a<=count($review);$a++){

			$lineA=file($review[$a-1], FILE_IGNORE_NEW_LINES) ?>

		<p class="words">
			<?php 
			if( $lineA[1] === "ROTTEN"){ ?>
			<img src="images/rotten.gif" alt="Rotten" />
		    <?php } else {?>
		    <img src="images/fresh.gif" alt="Fresh" />
	        <?php } ?>
			<q><?=$lineA[0]?></q>
		</p>

		<p class="person">
			<img src="images/critic.gif" alt="Critic" />
			<?=$lineA[2]?> <br />
			<?=$lineA[3]?>
		</p>

		<?php
		#turn to the next column when a= 5
		if($a==5){ ?>
		</div>
		<div id=dialog2> <?php } ?>

		<?php } ?>

		<div id="add_review">
			<a href="add_review_form.php?film= <?=$movie?> ">
			Add a review! </a>
		</div>

     </div>
	 </div>
	   
	    <div id="right" >
	    	<div id="reviewpic">
	    	<img class="right" src="moviedb/<?=$movie?>/overview.png" alt="general overview" />		
		

		<dl>
		<?php
		# add overview to the right part 
		$overview=file("moviedb/$movie/overview.txt");
		foreach ($overview as $line){

			$tokens = explode(":", $line);?>

			<dt><?=$tokens[0]?></dt>
			<dd><?=$tokens[1]?></dd>

		<?php } ?>
        </dl>



        </div></div>
        <div id="end">(1-10) of 88</div>
		
	</div>
</div>

	</body>
</html>
