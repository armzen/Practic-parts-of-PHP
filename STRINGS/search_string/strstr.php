<?php

$st = "Lets go to learn PHP.";
$bef = strstr($st, "go to", TRUE);
echo $bef . '<br>';
// 	Lets

$url = "http://www.google.com";
$befurl = strstr($url, "www", TRUE);
echo $befurl;
// 	http://
?>