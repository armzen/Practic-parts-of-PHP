<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="tempnam.php" method="post">
        <input type="submit" value="sexranit">
    </form>
    <?php
    
    if(isset($_POST)) {
        // stexcum
        $fnme = tempnam("dir/", "fl1");
        // bacum
        $fdesk = fopen($fnme, "w+");
        // pakum
        fclose($fdesk);
    }
    
    ?>
</body>
</html>