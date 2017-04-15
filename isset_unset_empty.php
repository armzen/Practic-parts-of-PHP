<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            font-size: 20px;
            font-family: monospace;
            color: forestgreen;
        }
        div{
            padding: 20px;
            border: 2px solid grey;
            width: 40%;
        }
    </style>
</head>
<body>
  <div>
       <?php

        $a = 'Gegham';
        echo $a.'<br>';

        $b = empty($a);
        if( isset($b)){
            echo '$b exist'.$b . '<br>';
        }
        else{
            'is already empty';
        }
        echo gettype($b).'<br>';
        var_dump($b);

        //----------//

        if(empty($a)){
            echo '<br> $a is empty';
        }
        else{
            echo '<br> $a is not empty <br>';
        }
        
      echo '<p>function get_defined_vars();</p>';
        $arr = get_defined_vars();
        print_r($arr).'<br>';
        ?>
    </div>
</body>
</html>