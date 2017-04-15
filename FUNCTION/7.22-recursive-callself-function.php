<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    function callself($counter) {
       if( $counter > 0) {      
           echo ($counter--) . '<br>';
           callself($counter); // recursive call to run again
       }
        else{
            return; // xekavarumy function-ic veradarcnum e cragrin
        }

    }
    
    callself(4);
?>
</body>
</html>
