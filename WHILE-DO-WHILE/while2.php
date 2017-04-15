<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <h2>cycle 2: տպել 1_ 33_ 555_ 7777 թվերի հաջորդականությունը:</h2>
  <div>
   <?php
    
    $i = 1;    
    while($i < 8){
        $j = 0;
            while( $j < $i){
                echo $i . ' ';                
                $j+=1;                
            }
        //echo '<br>';
        $i= $i+2;
    }    
    ?>
    </div>
    <h2>cycle 3: տպել 1_ 13_ 135_ 1357_ թվերի հաջորդականությունը:</h2>
    <div>       
        <?php
        $i = 1;
            while ( $i < 8) {
                $j = 0;
                    while ( $j < $i) {
                            echo ($j+1). '&nbsp;';
                        $j+=2;
                    }
                echo '<br>';
                $i+=2;
            }       
        ?>    
    </div>
    <h2> 1_ 21_ 321_ 4321_</h2>
    <div>
        <?php 
        $i = 0;
            while($i < 5){
                $j = $i;
                    while($j > 0){
                            echo $j . ' ';
                        $j--;
                    }
                echo '<br>';
                $i++;
            }
        
        ?>        
    </div>
    <h2> 1_ 321_ 54321_ 7654321_</h2>
    <div>
        <?php 
        $i = 0;
            while($i < 8){
                $j = $i;
                    while($j >= 0){                        
                            echo $j+1 .' ';
                        $j =$j - 1;                        
                    }
                echo '_';
                $i+=2;
            }
        
        ?>        
    </div>
</body>
</html>