<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>file writting.</title>
</head>
<body>
<?php

$p1 =<<<arm
paragrapg one
paragrapg two
paragrapg three
paragrapg four
arm;

$fh = fopen('data.txt','w+') or die('can not create the file');
fwrite($fh,$p1) or die('can not write to the file');
fclose($fh);

echo 'file "data.txt" created successfully';
echo file_get_contents('data.txt') . '<br>';


?>
</body>
</html>
<?php

?>