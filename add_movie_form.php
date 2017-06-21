

<link href="css/form.css" type="text/css" rel="stylesheet" />

<h1>Add a movie</h1>
		
<div id="content">
 
<form method="post" action="add_movie.php" enctype="multipart/form-data">
	
<div>Movie information</div>

<label for="info">Info</label><input id="info" name="info" type="file" accept=".txt" required="required"/><br />
<label for="overview">Overview</label><input id="overview" name="overview" type="file" accept=".txt" required="required"/><br />
<label for="image">Image</label><input id="image" name="image" type="file" accept=".png" required="required"/><br />

<div>Reviews</div>

<label for="review1">Review 1</label><input id="review1" name="review1" type="file" accept=".txt" required="required"/><br />
<label for="review1">Review 2</label><input id="review2" name="review2" type="file" accept=".txt" /><br />
<label for="review1">Review 3</label><input id="review3" name="review3" type="file" accept=".txt" /><br />
<label for="review1">Review 4</label><input id="review4" name="review4" type="file" accept=".txt" /><br />
<label for="review1">Review 5</label><input id="review5" name="review5" type="file" accept=".txt" /><br />
<label for="review1">Review 6</label><input id="review6" name="review6" type="file" accept=".txt" /><br />
<label for="review1">Review 7</label><input id="review7" name="review7" type="file" accept=".txt" /><br />
<label for="review1">Review 8</label><input id="review8" name="review8" type="file" accept=".txt" /><br />
<label for="review1">Review 9</label><input id="review9" name="review9" type="file" accept=".txt" /><br />
<label for="review1">Review 10</label><input id="review10" name="review10" type="file" accept=".txt" /><br />

<div>
	<input id="submit" name="submit" type="submit" value="Submit" />
</div>

</form>

</div>

<?php
	
?>
