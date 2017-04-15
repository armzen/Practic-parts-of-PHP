<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <style>
        h4{
            margin: 0;
            padding: 4px;
            color: dodgerblue;
        }
        body{
            color: teal;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
  <h2>Home page</h2>
   <?php

    echo '<a href= "HTTP_REF_page.php"><h4>link to php page.</h4> </a><br>';
    echo ' $_SERVER["HTTP_REFERER"]-ի պարունակությունը: ' .$_SERVER['HTTP_REFERER'];

    ?> 
    
</body>
</html>
