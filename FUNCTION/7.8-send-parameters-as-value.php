<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h2{ margin: 0}
        h2{
            text-align: center;
            font-weight: 400;
            color: teal;
            padding: 10px 40px;
        }
        h4{ padding: 2px 0px;}
    </style>
</head>
<body>
  <h2> Եթե ուզում ենք ֆունկցիայի պարամետրին տրված արժեքի փոփոխությունները գործեն նաև ֆ-ի սահմաններից դուրս, անհրաժեշտ է այդ արժեքը փոխանցել ՈՐՊԵՍ ՀՂՈՒՄ:</h2>
   <h4>Sending parameter as a value. a = 45.</h4>
    <?php
    
    function f1($var) {
        $var = $var + 10;
        echo 'from the function: ' . $var;
    }
    
    $a = 45;
    f1($a);
    echo '<br> out of function: ';
    echo $a.'<br>';    
    ?>
    
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
    
</body>
</html>