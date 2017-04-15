<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h2{
            font-family: monospace;
            text-align: center;
            padding: 10px 30px;
            line-height: 160%;
            color: #9d4e15;
            border-bottom: 3px solid coral;
            background-color:rgba(216, 191, 216, 0.21);
        }
    </style>
</head>
<body>
   <h2>swithc-case. մի քանի case կարող ենք դնել մի տողում: եթե ամեն case-i break -ը բաց թոնենք, ապա կտպվեն բոլոր արժեքները՝ անկախ նրանից, գտնվել է true-ն թե ոչ:</h2>
    <?php
    
    $date = date_default_timezone_set('Asia/Yerevan');
    $day = date('l'); // long
    //echo $day.'<br>';
    switch($day){
        case 'Monday':
            echo 'Monday';
            break;
        case 'Tuesday';
            echo 'Tues';
            break;
        case 'Wednesday':
            echo $day;
            break;
        case 'Thursday':
            echo $day;
            break;
        case 'Friday':
            echo $day;
            break;
        case 'Saturday':
            echo $day;
            break;
        case 'Sunday':
            echo $day;
            break;
    }
    echo '<br><br><br><br>';
    
    
    $number = 45;
    switch($number){
        case 1:
            echo 'mek';
        break;
        case 3: case 45:
            echo '45';
        break;
        case 4: case 42: case 36:
            echo 'kam 4 kam 42 kam 36';
        break;
        default:
            echo 'lav man ari';
    }
    
    ?>
</body>
</html>