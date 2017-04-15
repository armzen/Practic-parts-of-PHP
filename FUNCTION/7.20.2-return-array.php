<?php

function byte_weight($byte) {
    $kbyte = $byte / 1024;
    $mbyte = $kbyte/ 1024;
    $gbyte = $mbyte/1024;
    
    return array($byte, $kbyte, $mbyte, $gbyte);
}

$byt_arr = byte_weight( 123456879);
echo $byt_arr[2] . ' mb<br>';
list($b, $kb, $mb, $gb) = $byt_arr;
echo 'file has size: ' . $b . ' byte<br>';
echo 'file has size: ' . $kb . ' kb<br>';
echo 'file has size: ' . $mb . ' mb<br>';
echo 'file has size: ' . $gb . ' gb<br>';

?>