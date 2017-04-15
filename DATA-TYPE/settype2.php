<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h2{
            background-color: thistle;
            padding: 10px 20px;
            margin: 0;
            text-shadow: 2px 2px 2px #fff;
        }
    </style>
</head>
<body>
<h2>Տիպի փոփոխություն settype($var,"type") - ֆունկցիայի միջոցով:</h2>

<?php
    
    /*  settype($var , 'int') կամ (integer) */
    
    $var = 1.1752;
     settype($var , "int");
        echo $var . '<br>';
    
    $var = '4.1752';
     settype($var,"int");
        echo $var . '<br><br>';
    
    /* (bool) կամ (boolean) */
    $var = 45;
     settype($var,"bool");
    echo $var . '<br>';
    
    $var = 0;
    settype($var,"bool");
    var_dump( (boolean)$var) . '<br>'; 
    
    /* (float) կամ (real) կամ (double) */
    $var = NULL;
    settype($var,"float");
    echo '<br><br>' .$var . '<br>';
    
    $var = 'Armen';
    settype($var,"float");
    echo $var . '<br><br>';
    
    /* (string) */
    $var = 123456879;
    settype($var,"string");
    echo $var . '<br>';
    
    $var = 123.456;
    settype($var,"string");
    echo $var . '<br>';
    /* array to string - implode */
    $var = array('one','two','three');
    echo implode($var).'<br><br>';
    
    /* (array) */
    $var = 'Barev Karmir Arev';
    settype($var,"array");
    print_r($var);
    echo '<br>';
    
    $var = 789;
    settype($var,"array");
    print_r($var); echo '<br>';
    
    /* (object) */
    $var = array(
        array( 'mek','erku','ereq'),
        array( 'one','two','three')
    
    );
    settype($var,"object");
    var_dump( $var); echo '<br><br><br>';
    
    
    $var = 'sa hasarak mi tox e';
    settype($var,"object");
    var_dump($var);
    //echo $var->scalar;
    
?>
<script>

    var b = '456';
    var bb = typeof(b);
    console.log( bb);
    
    var c = Number(b);
    var cc = typeof(c);
    console.log(cc);
    
    
    
    
</script>
</body>
</html>