<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     <h3>Ասսոց. զանգ.-ի աճման կարգով տեսակավորում:</h3>
  <?php    
    $Sarr = array( 'a'=>'Armen','c'=> 'Cirak','d'=>'Dato','b'=>'Boris');
    $Narr = array( 10=>'Armen', 50=>'Davo', 40=>'Harut', 80=>'Saro');
    
    echo '<pre>
    <h3>Before Sorting:</h3>';
        print_r($Sarr);
        print_r($Narr);
    echo '</pre>';
    
    $sort_Sarr = krsort($Sarr);
    $sort_Sarr = krsort($Narr);

    echo '<pre>
        <h3>After Sorting:</h3>';
        print_r($Sarr);
        print_r($Narr);
    echo '</pre>';
    ?>
</body>
</html>