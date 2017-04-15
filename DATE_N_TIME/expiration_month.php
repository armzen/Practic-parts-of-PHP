<?php
$ts = time('now');
$month = 60*60*24*31;
// from base, 
$st = strtotime("07.03.2017");
$dif= $ts - $st;

// ete 1 amis@ lracela 
if( $ts - $st >= $month) { echo "yes";}
?>