<?php


$fuu = create_function('$a, $b' , 'return $a + $b;');

echo $fuu .'<br>';  // lambda_ 1 ....10 ...n

echo $fuu(6,4).'<br>';  // 10

echo call_user_func($fuu, 6,5) . '<br>';    // 11
echo call_user_func("print_r", array(5,5)) . '<br>'; // Array ( [0] => 5 [1] => 5 ) 1
echo call_user_func_array($fuu, array(6,6)) . '<br>'; // 12

?>
