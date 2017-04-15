<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo 'Server name: ' . $_SERVER['SERVER_NAME'] . '<br>';
    echo 'Server IP: '  .  $_SERVER['SERVER_ADDR'] . '<br>';
    echo 'Server port:' .  $_SERVER['SERVER_PORT'] . '<br>';
    echo 'WEB server: ' .  $_SERVER['SERVER_SOFTWARE'] . '<br>';
    echo 'HTTP version: '. $_SERVER['SERVER_PROTOCOL'] . '<br>';
    
    ?>
</body>
</html>