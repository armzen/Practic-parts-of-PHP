<?php

$filename = "dir/test_fopen.txt";

$fdesk = fopen($filename, "w+");

if($fdesk > 0){
    echo "File successfully created by fopen-function.";
    fclose($fdesk);
}
?>