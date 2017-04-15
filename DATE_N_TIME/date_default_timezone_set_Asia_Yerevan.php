<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body, h2, ul, li, h3{ margin: 0;}
        body{ background-color: rosybrown}
        h2{
            color: darkslategray;
            padding: 10px 20px;
            background-color:whitesmoke;
        }
        ul{
            list-style-type: armenian;
        }
        li{
            padding:8px 12px;
            font-family: sans-serif;
            font-weight: 500;
            word-spacing: 3px;
            border-bottom: 2px solid grey;
            width: 500px;
            background-color:snow;
        }
        h3{
            padding:4px 12px
        }
    </style>
</head>
<body>
 <h2> Օրերի բոլոր գրառման եղանակները date() ֆունկցիայի հետ: D , l / d, j / N :</h2>
 
 <ul>
    <?php
    date_default_timezone_set('Asia/Yerevan');
    $date = date('r');
    echo '<li>"r"-տառը date("r"): ' . $date . '</li>';

    $day = date('D'); // a,b,c  -D ..3 hat
    echo    '<li> "D"-տառը բերում է շաբաթվա 3-տառանի օրը: ' . $day . '</li>';

    $day = date('l'); // l - long
    echo '<li> "l"-էլ-տառը բերում է շաբաթվա օրը լրիվ: ' . $day . '</li>';

    $day = date('j');
    echo '<li>"j"-բերում է ամսվա օրը 1 նիշով: '.  $day. '</li>';

    $day = date('d');
    echo '<li>"d"-փոքրատառը բերում է ամսվա օրը, 2 նիշ: '.$day.'</li>';

    $day = date('N');
         echo '<li> "N"-բերում է շաբաթվա օրը 1-7: ' . $day . '</li>';
    $tz = date_default_timezone_get();
    echo '<li><h3>' . $tz . ' : date_default_timezone_get()</li></h3>';
    ?>
     
 </ul>

</body>
</html>