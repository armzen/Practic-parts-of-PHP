<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 <h3>Նվազման կարգով  տեսակավորում:</h3>
  <?php    
    $Sarr = array( 'Armen', 'Vacho', 'Zavo', 'Gegham');
    $Narr = array(1, 5, 3, 9, 4);
    
    echo '<pre>
    <h3>Before Sorting:</h3>';
        print_r($Sarr);
        print_r($Narr);
    echo '</pre>';
    
    $sort_Sarr = rsort($Sarr);
    $sort_Narr = rsort($Narr); 
    echo '<pre>
        <h3>After Sorting:</h3>';
        print_r($Sarr);
        print_r($Narr);    
    echo '</pre>';
    ?>
</body>
</html>