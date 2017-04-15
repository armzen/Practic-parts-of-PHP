<?php

date_default_timezone_set("Asia/Yerevan");

$date = date("D, d-m-Y");
echo $date . '<br>';
$d = substr($date,5,2);
echo 'day: ' . $d. '<br>';

$m = substr($date, 8,2);
echo 'maunth: ' . $m . '<br>';

$y = substr($date, 11, 4);
echo 'year: '.$y . '<br>';

$str = " Today is realy good day.";
$sub_count = substr_count($str, "day", 5); // 1
echo $sub_count;

?>