<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h2{
            font-size: 24px;
            font-family: sans-serif;
            
        }
        ul li {
            padding: 3px 0;
            letter-spacing: 1.3px;
            border-bottom: 2px solid crimson;
            width: 35%;
        }
    </style>
</head>
<body>
  <h2> for/ reset/current/next. for/end/current/prev.</h2>
   <ul>
      <h3>echo current($arr)</h3>
       <li>for(reset($arr);$value = current($arr); next($arr)) </li>
       <li>or(end($arr); current($arr); prev($arr)) </li>
   </ul>
    <?php
    
    $arr = array(1,2,3,4,5,6);
    
    for(reset($arr);$value = current($arr); next($arr)) {
        
        echo current($arr) . ' '; //  echo $value;
    }
    
    for(end($arr); current($arr); prev($arr)) {
        
        echo '<br>' . current($arr) ;
    }
    
    ?>
</body>
</html>