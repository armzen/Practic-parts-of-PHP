<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $i = 1;
    while( $i < 5){        
        $j = 0;
        while($j < $i){
            echo $i . ' ';
            $j++;
        }
        echo '<br>';
        $i++;
    }
    
    
    ?>
    
</body>
</html>