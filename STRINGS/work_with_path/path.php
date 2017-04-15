<?php

$path = $_SERVER['PHP_SELF'];
echo $path . '<br>';



$path = pathinfo($path);

echo '<pre>';
print_r($path);
echo '</pre>';

echo realpath("../../..");

//C:\Server\data\htdocs "../../../.."
?>