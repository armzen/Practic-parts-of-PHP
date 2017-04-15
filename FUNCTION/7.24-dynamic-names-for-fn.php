<?php

echo '<h3> FUNCTION - նների անունների դինամիկ փոփոխություն: </h3>';

function barov() { echo 'Barov tesanq';}
function hajox() { echo 'Hajox @ntacq';}

if( rand(0,1)){ $var = 'barov'; }
else{ $var = 'hajox'; }

$var();