<?php // urlpost.php

if(isset($_POST['url'])) {
	$url = clean_and_sanit($_POST['url']);
	
	echo file_get_contents("http://" . $url);
}

function clean_and_sanit($var) {
	
	$var = stripslashes($var);
	$var = htmlentities($var);
	$var = strip_tags($var);
	return $var;
}
?>