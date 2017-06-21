<?php
// FOUND A FOLDER FOR THE NEW MOVIE
	$movies= glob("moviedb/movie*");

	$count=count($movies);
	$count=$count+1;

	mkdir("moviedb/movie$count");

//WRITE THE FILES INTO THE FOLDER

write_file($_FILES["info"]["tmp_name"],"moviedb/movie$count/info.txt");
write_file($_FILES["overview"]["tmp_name"],"moviedb/movie$count/overview.txt");
write_file($_FILES["image"]["tmp_name"],"moviedb/movie$count/overview.png");

//WRITE REVIEWS INTO THE FOLDER
$review_x=1;
while(is_uploaded_file($_FILES["review$review_x"]["tmp_name"])){
	write_file($_FILES["review$review_x"]["tmp_name"],"moviedb/movie$count/review$review_x.txt");
	$review_x+=1;
}

// this function is to write the unloaded file into a right destination
function write_file($filename,$destination) {
	if(is_uploaded_file($filename)){
		move_uploaded_file($filename,$destination);
		print "Saved uploaded file as =$destination\n";
	}
}

?>

