<?php
echo  '<h3>Ֆունկցիան ստանում է պարամետրերի արժեքները ձախից-աջ:</h3>';

function print_all($left, $middle , $right) {
    echo $left .'<br>';
    echo $middle .'<br>';
    echo $right .'<br>';
}

    print_all( 10, 20 ,30);
    echo '<br>';

    function dothis( $a, $b, $c) {
        echo $a . '<br>';
        echo $b . '<br>';
        echo $c . '<br>';
    }
    $i = 15;
    dothis(++$i, $i=$i*5, --$i);

?>