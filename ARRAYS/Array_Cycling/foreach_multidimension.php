<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h3, p { margin: 0; width: 100px;}
        h3{
            letter-spacing: 2px;
            font-weight: 300;
            font-size: 26px;
            padding: 2px 8px;
            border: 2px solid #a5a5a5;
            width: 100px;
            background-color: azure;
        }
        p{
            letter-spacing: 1px;
            font-size: 18px;
            padding: 1px 8px;
            border: 2px solid #e8e8e8;
            background-color: aliceblue;
        }
        span {
            width: 80px;
            height: 25px;
            display: block;
            border: 2px solid #a9a9a9;
        }
        .c1{
            background-color: azure;
        }
        .c2{
            background-color:aliceblue;
        }
    </style>
</head>
<body>
   <h2>keys <span class='c1'></span></h2>
   <h4>values <span class="c2"></span></h4>
    <?php
    
    $arr = array(
        "size" => array('small', 'medium','large'),
        "color"=> array('red', 'green', 'blue'),
        "side"=>array('left', 'middle', 'right')
    );
    
    foreach($arr as $key => $type){
        
        echo "<h3>$key</h3>";        
        foreach($type as $key2 => $value){
            
            echo "<p>$value</p>";
            //echo $key2.'<br>';
        }
        
    }
        
    ?>
</body>
</html>