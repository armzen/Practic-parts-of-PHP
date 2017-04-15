<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h2>in localhost, ip can be 127.0.0.1 or that you see below ...</h2>
    <?php
    
    echo $_SERVER['REMOTE_ADDR'];
    /* եթե կլիենտը օգտագործում է պրոքսի-սերվեր, IP-ն կարողա չերևա */
    /* այդ ժամանակ օգտագործում ենք հետևյալ էլեմենտը սերվերի */
    // echo $_SERVER['HTTP_X_FORWARDED_FOR'];
    /* եթե կլիենտը օգտագործում է անոնիմ պռոքսի սերվեր, այն կարող է թաքցնել նրա IP-ն */
    
    
    ?>
</body>
</html>