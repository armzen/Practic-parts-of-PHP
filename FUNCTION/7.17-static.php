<?php

    function counter_loc() {
        $count = 0;
        return ++$count;
    }
    echo 'counter local: <br>';
    echo counter_loc() . '<br>';
    echo counter_loc() . '<br>';
    echo counter_loc() . '<br>'; // 1 too ...

    function counter_stat() {
        static $count = 0;
        return ++$count;
    }
    echo 'counter static: <br>';
    echo  counter_stat() . '<br>'; //1
    echo  counter_stat() . '<br>'; //2
    echo  counter_stat() . '<br>'; //3
    echo  counter_stat() . '<br>'; //4

?>