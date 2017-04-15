<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2> պարզ թվերի դուրս բերումը:</h2>
    
    <?php   
    $flag = true; 
     for ($i = 2; $i < 100; $i++) { 
        for ($j = 2; $j < $i; $j++) {
            
            if(($i % $j)!=0) {
               continue;
            }
            else{
            $flag = true; 
             break;                
            } 
        }
        if(!$flag) echo $i." "; 
        $flag = false;
     }

?>
</body>
</html>




















