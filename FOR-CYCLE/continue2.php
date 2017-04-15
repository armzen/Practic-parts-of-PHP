<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    for($i = 1; $i< 10; $i++){
        if($i > 4 && $i < 7 ){
            continue;
        }else{
        echo $i.'<br>';
        }
    }
    ?>
</body>
</html>