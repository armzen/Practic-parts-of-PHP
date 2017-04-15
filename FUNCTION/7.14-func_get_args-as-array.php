<?php

    function arg_list2() {

        $arr = func_get_args();
        for($i=0; $i < count($arr); $i++){
            echo 'arg num'. $i. ' is ' . $arr[$i] .'<br>';
        }
    }

    arg_list2( 5, 'norin', 9, 'barev');

?>