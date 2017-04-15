<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
header('x-my-header: Hello World!');
header('x-my-message: message-text.');


echo '<pre>';
print_r(headers_list());

echo '</pre>';

?>
	<meta charset="UTF-8">
	<title>List of HTTP-headers</title>
</head>
<body>
	
</body>
</html>
<?php

?>