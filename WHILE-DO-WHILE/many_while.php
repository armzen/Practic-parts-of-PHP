<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    $a = 0;
    $b = 0;
    $c = 0;
    while($a < 30){
        while($b + $a < 20){
            while($c + $b < 5){
                echo $c. ' _from cycle 3 <br>';
                $c++;
                if( $c + $b == 5)break 3;
            }
            echo $b . ' _from  cycle 2 <br>';
            $b++;
        }
        echo $a.' _from cycle 1 <br>';
        $a++;
    }
    
    
    ?>
</body>
</html>