<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    for( $i = 0; $i < 10; $i++){
        echo $i;
    }
    echo '<br>';
    
    for($a = 0, $b = 5;  $a < 8,  $b > 0;  $a++, $b-- ){
        echo $a .'and'.$b. '<br>';
    }
    echo '<br>';
    
    $k = 0;
    for( ;; ){
        $k++;
        echo $k;
        if($k > 5) break;
    }
    
    ?>
</body>
</html>