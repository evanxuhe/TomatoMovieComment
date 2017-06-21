<?php

    session_start();   
    $login = $_SESSION["login"];  //Read login
    include("include/util.php");
	$boxname= $_POST["boxname"];
    $temp_path = userpath($login)."/temp.txt";
move_file($_FILES["boxfile"]["tmp_name"],$temp_path);
if(file_exists($temp_path)){
	fopen(boxpath($login,$boxname), 'w');
	foreach(file($temp_path) as $content)
	$content_tmp = [];
	$content_tmp[0] = trim(explode(" ",$content)[0]);
	$content_tmp[1] = trim(explode(" ",$content)[1]);
	$content_tmp[2] = "1";
	file_put_contents(boxpath($login,$boxname), implode(":", $content_tmp)."\n",FILE_APPEND);
}


    


// this function is to write the unloaded file into a right destination
function move_file($filename,$destination) {
	if(is_uploaded_file($filename)){
		move_uploaded_file($filename,$destination);
		print "Saved uploaded file as =$destination\n";
	}
}

?>

