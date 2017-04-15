<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        span{
            color: crimson;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <?php
    
    $arr = array ( 'first', 'second', 'third');
    $x = each($arr);   
    $y = each($arr);
    $z = each($arr);
    
    echo '<span>EACH</span><pre>';
        print_r($x);
        print_r($y);
        print_r($z);
    echo '</pre>';
    
    echo $z[0] . ' = ';
    echo $z['value'] . '<br>';
    
    list($mek, $erku, $ereq) = $arr;
    echo "<span>LIST</span><p> $mek, $erku, $ereq </p>";
    ?>
</body>
</html>