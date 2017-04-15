<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h2> Գտնել բոլոր ամբողջ թվերը:</h2>
    <?php
    // տրված է միջակայք տարբեր արժեքներով, գտնել միայն ամբողջ թվերը
    
    $x = array( 4.6, 'Manushak', '45', 36, '17dr', 'cv23', 79, 'string', 85);
    
    function check_integer($i){
        if( is_numeric($i) && is_int($i)){
            return $i;
        } 
    }
    
    foreach($x as $key => $value){
        //var_dump($value) . '<br>';
        $value = check_integer($value);
        echo $value . ' ';
    }
    
    ?>
</body>
</html>