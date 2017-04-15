<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 <h3>Աճման կարգով  տեսակավորում:</h3>
  <?php    
    $Sarr = array( 'Armen', 'Vacho', 'Zavo', 'Gegham');
    $Narr = array(1, 5, 8, 6, 3);
    
    echo '<pre>
    <h3>Before Sorting:</h3>';
        print_r($Sarr);
        print_r($Narr);
    echo '</pre>';
    
    $sort_Sarr = sort($Sarr);
    $sort_Narr = sort($Narr); 
    echo '<pre>
        <h3>After Sorting:</h3>';
        print_r($Sarr);
        print_r($Narr);    
    echo '</pre>';
    ?>
</body>
</html>