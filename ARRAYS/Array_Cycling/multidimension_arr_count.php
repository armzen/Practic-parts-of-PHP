<?php

    $arr = array(
        "size" => array('small', 'medium','large'),
        "color"=> array('red', 'green', 'blue'),
        "side"=>array('left', 'middle', 'right')
    );

    $arr_len = count($arr, COUNT_RECURSIVE);
    echo 'recursive count: ' . $arr_len;

    $len_size = count($arr['size']);
    echo '<br> "size-sub-array length, $arr[\'size\']" : '.$len_size;



?>