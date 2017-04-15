<?php
    /* count and sizeof the same thing */
    
    $arr = array(1=>'one', 0=>'two',2=> 'three', 'one');

    $len = count($arr);
    echo 'values counted  and equal: ' . $len;

    $size = sizeof($arr);
    echo '<br> array size is: ' . $size . '<br>';
    
    /* index-ը հանդիպման հաճախականությոնն է */
    $vals_input_count = array_count_values($arr);
    print_r($vals_input_count); 


?>