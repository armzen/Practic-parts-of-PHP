<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        div{
            font-size: 20px;
            font-family: monospace;
            font-weight: 500;
        }
        h3{
            font-family: monospace;
        }
    </style>
</head>
<body>
<h2>Տարօրինակ պահվածք պհպ.</h2>
<h3 style="color:crimson"> Սա պայմանավորված է նրանով, որ php-ում տողի գումարումը + ով չի կարող իրականացվել !!!</h3>
<div>
<?php

$a = null;
echo $a;
echo 'null-ը echo չի լինում, միայն echo gettype($var) = '.gettype($a);
    
$num = '456';
    if(is_numeric($num)){
        echo '<br>is_numeric("456")=> yes ofc horse';
    }

    
    $b = 15;
    $c = 'tasnvec';
    echo '<br>'. ($b + $c). ' - php-i ardyunq(int) <br>';
    
    $str = 'Hello';
    $str1 = 13;
    if($str1){
        echo '<br>' . true . '<br>';
    }else{
        echo '<br>'. var_dump($str1).'<br>';
    }
?>
</div>
<script>
 var a = 15;
 var b = 'tasnvec';

    document.write('<br><h3>' + a+b +' - JS-i ardyunq(string)</h3>');
</script>
</body>
</html>