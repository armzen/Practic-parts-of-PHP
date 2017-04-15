<?php

$abs = realpath("path_types.php");
echo 'abs path:_ '.$abs . '<br><br>';

$rel = $_SERVER['PHP_SELF'];
echo 'rel path:_ '.$rel . '<br><br>';

$abs = realpath("../../../");
echo 'abs path:_ '.$abs . '<br><br>';



$rel = pathinfo($rel);
echo '<pre>';
print_r($rel);
echo '</pre>';


?>