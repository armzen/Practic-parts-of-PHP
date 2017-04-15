<?php


function fun1($a, $b) {
    $sum = $a + $b;
    return $sum;
}

if( function_exists('fun1')) echo 'fun1 exists';
else echo 'fun1 doe\'s not exists';

