<?php

$a = 'one';
$b = 'two';
$c = 'three';

$arr = compact('a', 'b', 'c');
echo '<pre>';
    print_r($arr);
echo '</pre>';

$arr['a'] = 'four';
$arr['b'] = 'four';
$arr['c'] = 'four';

extract($arr, EXTR_PREFIX_SAME , "pref");

echo $a. '<br>'.$b .'<br>'. $c . '<br> ';
echo $pref_a. '<br>'.$pref_b .'<br>'. $pref_c . '<br> ';




$bbb = [ 'mek'=> 'one','erku'=> 'two'];
print_r($bbb);
?>