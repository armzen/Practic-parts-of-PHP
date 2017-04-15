<?php

$tox = "<p> Barev ashxarh </p> ";

$tox = str_replace("<p>", "<h3>",$tox);
$tox = str_replace('</p>', '</h3>',$tox);

echo $tox;



?>