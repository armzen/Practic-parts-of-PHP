<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <h3>Ասսոց. զանգ.-ի նվազման կարգով տեսակավորում:</h3>
  <?php    
    $Sarr = array( 'a'=>'Armen','c'=> 'Cirak','d'=>'Dato','b'=>'Boris');
    $Narr = array( 'Armen'=>50, 'Vacho'=>40, 'Zavgo'=>60, 'Gegham'=>10);
    
    echo '<pre>
    <h3>Before Sorting:</h3>';
        print_r($Sarr);
        print_r($Narr);
    echo '</pre>';
    
    $sort_Sarr = arsort($Sarr);
    $sort_Sarr = arsort($Narr);

    echo '<pre>
        <h3>After Sorting:</h3>';
        print_r($Sarr);
        print_r($Narr);
    echo '</pre>';
    ?>
</body>
</html>