<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page</title>
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
        p{ font-weight: bold;}
        p a:visited { color: crimson; }
    </style>
</head>
<body>
  <h2>Ather page</h2>
   <?php
    
    echo '<a href= "HTTP_REF_index.php" ><h4>link to index. php.</h4> </a><br>';
    echo ' $_SERVER["HTTP_REFERER"]-ի պարունակությունը: ' .$_SERVER['HTTP_REFERER'];

    ?>
    
    <p style="color: crimson">
        <a href="HTTP_REF_index.php"> html link, check-speed</a>
    </p>
    
</body>
</html>