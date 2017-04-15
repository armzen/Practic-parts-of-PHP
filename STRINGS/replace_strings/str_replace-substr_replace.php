<?php

//substr_replace(string, replace, start, length);

$a = "Shat erkar mi tox";
$c= "karch";
$b = substr_replace($a,$c,5, 5);
echo '<br>'.$b;


// str_replace(search, replace, string, count_replacement)

$r = str_replace("tox", "kyanq", $a, $count_replacement);
echo '<br>'.$r;
echo '<br>'.$count_replacement;

?>