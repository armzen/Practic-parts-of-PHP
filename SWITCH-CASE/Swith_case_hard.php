<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h2{
            margin: 0;
            padding: 10px 20px;
            color: firebrick;
            border-bottom: 3px solid lime;
            font-family: sans-serif;
            font-weight: 500;
        }
        h4{ color: rosybrown}
    </style>
</head>
<body>
<h2>CASE-ը կարող է պարունակել մի քանի պայմաններով արտահայտություն:</h2>

<?php
echo '<h4>';
$number = 80;

switch($number){
    case ($number > 10 && $number < 20):
        echo 'between 10 and 20';
        break;
    case ($number > 20 && $number < 50):
        echo 'between 20 and 50';
        break;
    case ($number > 70 || $number < 100):
        echo 'between 70 and 100';
        break;
    default:
        echo 'try to find number';       
}

echo '</h4>';
?> 
</body>
</html>
