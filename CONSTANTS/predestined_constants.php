<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h2> Նախասահմանված կոնստանտներ:</h2>
   <h3>
       <ul>
           <li>'Ֆայլի անուն: '. __FILE__ ;</li>
           <li>
               'Ֆայլի տող, վերադարձնում է այն տողի համարը, որտեղ գրված է տվյալ հրամանը: '. __LINE__ ;
           </li>
           <li>'նախորդ տող: '. (( __LINE__)-2)</li>
           <li>'Ֆայլի արմատային թղթապանակ'. __DIR__ </li>
       </ul>
   </h3>
    <?php

    echo '<h3> Ֆայլի անուն, լրիվ ճանապարհով: '. __FILE__ .'</h3>';
    echo '<h3> Ֆայլի տող: '. __LINE__ .'</h3>';
    echo '<h3> Ֆայլի նախորդ տող: '. (( __LINE__)-2) .'</h3>';
    
    echo '<h3>Ֆայլի արմատային թղթապանակ: '. __DIR__ .'</h3>';
    
    ?>
</body>
</html>