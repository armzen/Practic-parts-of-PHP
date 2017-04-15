<?php

$work = array(
    "at_home" => array('harduk','lvacq', 'maqrutyun'),
    "at_work" => array('hashvark','vacharq','arq'),
    "at_hayat" => array('blot','gyalaji','bordur'),
);


echo '<pre>';
    print_r($work);
echo '</pre>';

array_multisort($work['at_home'],SORT_DESC, SORT_STRING,
                $work['at_work'],SORT_ASC, SORT_NATURAL,
                $work['at_hayat'],SORT_DESC, SORT_STRING
               
               );
echo '<pre>';
    print_r($work);
echo '</pre>';

?>