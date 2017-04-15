<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h3> Այս դեպքում, երբ ֆ-ն ինչ-որ պրոցեսի կամ փոփոխականի բուլյան արժեքից է կախված, <br>հնարավոր չէ կանչել նրան նախքան հայտարարելը:</h3>
<?php

    $flag = true;
    
    if($flag) {
        function fn2() {
            $summm = 26 * 10;
            echo $summm;
        }
    }
    // ete ays toxy barcracnenq verev kstaananq sxal
    if($flag) echo fn2();
    
?>   
    
</body>
</html>
