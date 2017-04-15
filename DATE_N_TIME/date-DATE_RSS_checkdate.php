<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set('Asia/Yerevan');
    $date = date(DATE_RSS);
    echo $date.'<br>';
    $date = date(DATE_ATOM);
    echo $date.'<br>';
    $date = date(DATE_COOKIE);
    echo $date.'<br>';
    $date = date(DATE_W3C);
    echo $date.'<br>';
    
    /* checkdate  -month-day-year*/
    $y = 2017;
    $m = 1;
    $d = 17;
    if(checkdate($m, $d, $y)){
        echo 'valid date: '. "$m -month. $d -day. $y -year <br>";
    }
    else{
        echo 'the date is invalid <br>';
    }    
    
    ?>
</body>
</html>