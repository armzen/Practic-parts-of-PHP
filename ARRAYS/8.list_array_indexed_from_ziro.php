<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <?php
   if(function_exists("list")){
       echo 'list f-n is exist here.';
    }
    else{
        echo 'list not exist';
    }

    $a =array ('one','two', 'three');
    $b =array (10,20, 30);
    $c = array('mek'=>'one','erku'=>'two', 'ereq'=>'three');

    echo '<pre>';
        print_r($a);
        print_r($b);
        print_r($c);
    echo '</pre>';
   
    
    list($a1, $a2, $a3) = $a;
    list($b1, $b2, $b3) = $b;
    //list($elem1, $elem2, $elem3) = $c;

    echo "<p>a1= $a1, a2= $a2, a3= $a3 </p>";
    echo "<p>b1= $b1, b2= $b2, b3= $b3 </p>";
    echo '$a1: '. $a1;
    
    echo '<hr>';
    echo $x = 'x';
    echo $y = 'y';
    
    list($x,$y) = array($y, $x);
    echo '<br>';
    echo $x.'<br>';
    echo $y.'<br>';
?> 
</body>
</html>


