<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    $a = array( 'one', 'two', 'three');
    $b = array( 1 , 2 , 3);
    
   if(isset($a[3])){
        echo 'yes'.$b[3];
    }
    else{
        echo 'no';
    }
    
    echo '<br>' . is_array($a) . '<br>';
    if( is_array($b[0])){
        echo 'yes array';
    }else{ echo 'noep';}
    
    if(array_key_exists(3,$a)){
        echo '<br> key exist';
    } else{ echo '<br> key not exist ';}
    ?>
</body>
</html>