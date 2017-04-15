<?php

    $a = array('one','two','three');
    $b = array( 1 , 2 , 3);
    
    /* ինդեքսի առկայության ստուգում */
    if(array_key_exists(2,$a) && array_key_exists(0,$b)){
        echo 'Both arrays have that keys <br>';
    }

    /* հայտնի արժեքով ինդեքսի որոշում*/
    $needle = 'two';
    $k = array_search($needle,$a);
    echo 'key is: '.$k ;
    
    $x = in_array('three', $a);
    echo '<br> this value is in_array: ' . $x . '<br>';
?>