<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h2>echo-ն կարող է ընդունել մի քանի արժեք, բաժանված ստորակետերով: print-ը՝ ՈՉ!</h2>
<h2>print-ը կվերադարձնի բուլ-արժեք՝ տպման հաջող օպերացիայի մասին, echo-ն՝ ՈՉ!</h2>
 <?php
    date_default_timezone_set('Asia/Yerevan');
    $a = date('d');
    $b = ' is my ';
    $c = ' birthday.';
    
    echo $a, $b, $c. '<br>';
    //print $a, $b, $c; // կբերի parse error
    echo print($a);
?>
</body>
</html>