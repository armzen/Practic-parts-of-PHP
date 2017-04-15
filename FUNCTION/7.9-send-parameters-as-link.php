<h4>Sending parameter as a link. b = 45.</h4>
    
    <?php
    
    function f2(&$var) {
        $var = $var + 10;
        echo 'from the function: ' . $var;
    }
    
    $b = 45;
    f2($b);
    echo '<br> out of function: ';
    echo $b . '<br>';
    
    ?> 