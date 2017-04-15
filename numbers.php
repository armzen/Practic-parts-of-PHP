<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h3> PHP հենց տեսնում է + նշանը, արժեքը վեր է ածում թվի:</h3>
    <?php
    
    echo '45fr' + 12 . '<br>';  // թիվը վերցրեց, տառերը անտեսեց
    echo 'ds60' + 10 . '<br>';  // սկզբից տառերն էին, թիվը չնկատեց
    
    $a=4;
    echo '<br>today we have ', $a,' players. <br>';
    
    $f = (5/3);
    echo (int)$f . '<br>';
    echo round($f,3) . '<br>';
    echo ceil($f) . '<br>';
    echo floor($f) . '<br>';
    
    $d = 3%6;
    echo $d . '<br>';
    
    ?>
</body>
</html>