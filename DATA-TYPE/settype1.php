<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    
    /*  (int) կամ (integer) */
    $var = 1.1752;
    echo (int)$var . '<br>'; 
    $var = '4.1752';
    echo (int)$var . '<br><br>';  
    
    /* (bool) կամ (boolean) */
    $var = 45;
    echo (bool)$var . '<br>';   
    $var = 0;
    var_dump( (boolean)$var) . '<br>'; 
    
    /* (float) կամ (real) կամ (double) */
    $var = NULL;
    echo '<br><br>' .(float)$var . '<br>';
    $var = 'Armen';
    echo (float)$var . '<br><br>';
    
    /* (string) */
    $var = 123456879;
    echo (string)$var . '<br>';
    $var = 123.456;
    echo (string)$var . '<br>';
    /* array to string - implode */
    $var = array('one','two','three');
    echo implode($var).'<br><br>';
    
    /* (array) */
    $var = 'Barev Karmir Arev';
    print_r( (array)$var);
    echo '<br>';
    
    $var = 789;
    print_r( (array)$var); echo '<br>';
    
    /* (object) */
    $var = array(
        array( 'mek','erku','ereq'),
        array( 'one','two','three')
    
    );
    var_dump( (object)$var); echo '<br><br><br>';
    
    
    $var = (object) 'sa hasarak mi tox e';
    var_dump($var);
    //echo $var->scalar;
    
?>
</body>
</html>