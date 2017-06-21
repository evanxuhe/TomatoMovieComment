<?php
$movie = $_GET["film"];
$reviews= glob("moviedb/$movie/review*.txt");
$reviews_num=count($reviews)+1;
?>
//WRITE THE FILES INTO THE TXT FILE
<?php 
if(empty(trim($_GET["review"]))/empty(trim($_GET["name"]))/empty(trim($_GET["organization"]))){  ?>
<a src= "add_review_error.php"/>

<?php }


$review=$_GET["review"]."\n".$_GET["rating"]."\n".$_GET["name"]."\n".$_GET["organization"];
file_put_contents("moviedb/$movie/review$reviews_num.txt", $review);


?>
