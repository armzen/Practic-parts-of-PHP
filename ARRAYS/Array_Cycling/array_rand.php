<?php
    echo '<h3> Assoc array </h3>';


    $arr = array( 'mek' => 'one', 'erku' => 'two', 'ereq' => 'three', 'chors' => 'four');
    
    echo '<pre>';
        print_r($arr);    

        $key_rand = array_rand($arr);
        echo '<p> random key: '.$key_rand . '</p>';

        echo 'it\'s value is:' . $arr[$key_rand];

    echo '<pre>';

?>