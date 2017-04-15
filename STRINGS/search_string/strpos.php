<?php

$s = "how much is the fish?";
echo $s . '<br>';
$spos = strpos($s, "is",3);
echo 'position of search-word "is": '.$spos . '<br>';	// 9
echo substr($s, strpos($s, "much")); 					//much is the fish?
?>