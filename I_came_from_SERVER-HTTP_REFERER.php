<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $came_from = $_SERVER['HTTP_REFERER'];
        echo "i come from: ".$came_from;
    
    ?>
</body>
</html>