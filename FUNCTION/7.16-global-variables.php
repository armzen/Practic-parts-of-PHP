<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h2{ margin-top: 0;}
    </style>
</head>
<body>
   <h2>Գլոբալ փոփոխ.-xններ: global -keyword</h2>
   <h2>Գլոբալ փոփոխ-ը հասանելի է նաև սուպերգլոբալ զանգվածից - $GLOBALS</h2>
   
   <?php
    
    function some_action(){
        global $var;
        $var = 5;
        echo $var . '<br>';
    }
    
    $var = 15;
    some_action();
    
    function action2() {
        $GLOBALS['a'] = 33;
        echo ($GLOBALS['a']);        
    }
    $a = 11;
    echo $a . '<br>';   // 11
    action2();          // 33
    echo '<br>'.$a.'<br>';// 33
    
    ?>
    
</body>
</html>