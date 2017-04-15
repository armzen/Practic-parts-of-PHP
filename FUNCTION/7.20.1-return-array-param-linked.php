<?php

function get_arr(&$arr) {
    $arr[]='four';
    return $arr;
}
$arr = array( 'one', 'two', 'three');
print_r($arr);           echo '<br>';
print_r(get_arr($arr));  echo '<br>';
print_r($arr);           echo '<br>';

echo '<p> Այսինքն ֆ-ով անցնելուց հետո փոխվեց նաև արտաքին զանգվածը՝ դա էլ ուզում էինք</p>';
echo '<p> Զանգվածը ֆ-ին տրվել էլ լինքով (&$arr), դա է պատճառը, որ փոխվեց նաև արտաքինը:</p>';
echo '<p> Կարող են լինել դեպքեր, երբ պետք չէ, որ աևտաքինը փոխվի:</p>';

?>