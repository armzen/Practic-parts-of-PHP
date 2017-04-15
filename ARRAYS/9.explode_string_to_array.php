<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>explode('$divider',$str) to array</h3>
<h3>implode($arr) to string</h3>
<?php

    $str = 'One beautiful day.';
    echo '<p> WE HAVE ONE STRING: ' .$str.'</p>';

    echo 'explode(" ", $str)-> ';
    $arr = explode(' ', $str);
    print_r($arr);

    echo '<br> implode(" ", $arr)-> ';
    $string = implode(' ',$arr);
    echo $string;
?>
</body>
</html>
