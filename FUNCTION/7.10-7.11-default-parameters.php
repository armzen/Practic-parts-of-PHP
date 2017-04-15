<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h2></h2>
   <?php
    
    function fun1($a = 5, $b = 15) {
        $sum = $a + $b;
        return $sum;
    }
    
    echo fun1() . '<br>';       //20
    echo fun1(10) . '<br>';     //25
    echo fun1(20, 0) . '<br>';  //20
    echo fun1(0, 30) . '<br>';  //30   
    
    ?>
    <h2></h2>
    <?php
    
    function fun2($important, $not_important = 12) {
        $sum = $important + $not_important;
        echo $sum . '<br>';
    }
    
    fun2(13) ;
    fun2(0,11);
    fun2(15);
    
    ?>
    
</body>
</html>