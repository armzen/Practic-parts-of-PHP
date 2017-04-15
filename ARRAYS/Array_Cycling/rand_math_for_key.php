<?php
    echo '<h3>Create new arr by range(1,10)</h3><br>';
    $arr = range(1,10);
    print_r($arr);

    $rand_key = rand(1,count($arr)-1);
    echo '<br> $rand_key is: '.$rand_key . '<br>';

    echo '<h3> $arr[$rand_key] has value: ' . $arr[$rand_key] . '</h3>';

?>