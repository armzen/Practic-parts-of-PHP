<?php

$str = '<a href="www.go.com">Go to go.com</a>';
$spchar = htmlspecialchars($str);
echo $spchar . '<br>';


$decoded = htmlspecialchars_decode($spchar);
echo $decoded . '<br>';

$rus = '<p title="name"> это русских язык</p>';
$rushtml_char = htmlspecialchars($rus, ENT_QUOTES, "cp1251");
$rushtml_ent = htmlentities($rus,  ENT_QUOTES, "cp1251");
echo $rushtml_char . '<br>';
echo $rushtml_ent;
?>
