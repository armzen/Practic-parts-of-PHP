<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
	header('Cache-Control: public');
	header("Cache-Control: max-age=60*10");

echo '<pre>';
print_r(headers_list());
echo '</pre>';
?>
	<meta charset="UTF-8">
	<title>public cache</title>
</head>
<body>
	
</body>
</html>
<?php

?>