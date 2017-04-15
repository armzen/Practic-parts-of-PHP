<?php

    function outter() {         
        function inner() {
            echo 'Hello from inner! <br>';
        }
        $txt = 'Hello from outer! <br>';
        return $txt;
       
    }
    
    echo outter();
         inner();
    echo '<hr>';

?>