<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
echo '<h3> $flag and break. </h3>';
    $a = 1;
    $flag = true;
    while($flag){        
        
        if( $a > 5) $flag = false;
        echo $a. ' ';
        $a++;
    }
    echo '<h3> break -ը չի թողնում, որ ավել քայլ անի ցիկլը: </h3>';
    
    $b = 1;
    while(true){
          
        if($b > 5) break;
      
        echo $b .' ';
        $b++;
    }
    
    
    ?>
</body>
</html>