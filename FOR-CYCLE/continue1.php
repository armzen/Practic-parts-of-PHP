<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
    <?php
    // բաց է թողնում բոլոր այն արժեքները, որոնք պայմանավորված են
    for($i = 2; $i < 100;$i++ ){
        if( $i == 2 || $i == 3 ){
            echo $i.'<br>';
        }
        if(( $i % 3) == 0 || ( $i % 2) == 0 || ($i % 5) == 0 || ($i % 11)==0) continue;
        echo ($i) . '<br>';
    }
    
    
    ?>
</body>
</html>