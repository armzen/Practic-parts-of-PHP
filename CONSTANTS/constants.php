<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h2>Կոնստանտներ</h2>
   <ul>
       <li>if(defined('anun'){ echo 'yes' }</li>
       <li>constant('anun') - վերադարձնում է anun կոնստանտի արժեքը:</li>
       <li></li>
   </ul>
    <?php
 /* Կոնստանտի անունը անկախ ռեգիստրից true- 3-րդ պարամետրի միջոցով: */
    
    define( 'ANUN', 'Armen', TRUE);
    echo aNuN;

    if(defined('anun')){
        echo '<p>yes, defined! '.constant('anun') . '</p>';
    }
    
    /* Կոնստանտի պահումը փոփ-ի մեջ */ 
    $name = Anun;
    echo $name . '<br>';
    
    /* Բոլոր կոնստանտները սահմանված և նախասահմանված: */
    $all_Constants = get_defined_constants();
    print_r($all_Constants);


?>
</body>
</html>


