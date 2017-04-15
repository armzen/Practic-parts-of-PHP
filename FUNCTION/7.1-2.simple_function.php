<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Simple function</title>
</head>
<body>
   <h2> Եթե ֆունկցիայի մարմինը պարունակում է return, ապա ֆ-ն կանչվում է տպելով:</h2>
   <h2> Եթե ֆունկցիայի մարմինը պարունակում է echo, ապա պարզապես կանչում ենք ֆ-ն:</h2>
    <?php

    function fn1() {
        $sum = 5+10;
        return $sum;
    }
    
    echo '<p>'. fn1() . '</p>';
    
    function fn2() {
        $result = 5 + 15;
        echo '<p>'. $result . '</p>';
    }

    fn2();
?>
</body>
</html>


