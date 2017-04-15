<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <form action="tmpfile.php" method="post">
       <input type="submit" value="send">
   </form>
   
   <?php
    
    if(isset($_POST)) {
        
        $tmp_file = tmpfile();
        $tmp_file = tempnam(sys_get_temp_dir(),"tmp_");
        echo $tmp_file;
        $fdesc = fopen($tmp_file, "w+");
        fclose($fdesc);
        
    }
    
    ?>
</body>
</html>