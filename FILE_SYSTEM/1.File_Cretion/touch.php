<?php
$dirname = "dir";
//$dir = mkdir($dirname);
$filename = "$dirname/test_touch.txt";
$file = touch($filename);

if($file > 0 ){
    echo "File wa successfuly created by touch-function.";
}
?>