<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h3{ 
            font-family: monospace;
            color: firebrick;
            font-size: 22px;
            word-spacing: 3px;
        }
        body{
            font-size: 19px;
            color: rebeccapurple;
        }
    </style>
</head>
<body>
  <h3> current($arr), next($arr), prev($arr), </h3>
   <?php
    $a =array ('one', 'two', 'three');


    $one = current($a);    
    $two = next($a);
    $three = next($a);
    $prev = prev($a);

    echo "<pre> current is: $one,<br> next is: $two,<br> next again is: $three, <br> prev is: $prev</pre>";
    
    $last = end($a);
    $last_key = key($a); 
    $reset = reset($a);
    $reset_key = key($a);
    
    echo "end of array: $last , and its key $last_key <br>";
    echo "reset to start of array: $reset , and its key $reset_key <br>";
    ?>
</body>
</html>