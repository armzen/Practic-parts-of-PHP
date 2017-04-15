<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
header('my-header: header');
$url = 'http://www.tutorialrepublic.com/';
header('my-message: message');
echo '<pre>';
print_r(get_headers($url, TRUE));
print_r(headers_list());
echo '</pre>';
?>
	<meta charset="UTF-8">
	<title>get_headers from other server</title>
</head>
<body>
	
</body>
</html>
