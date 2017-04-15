<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Private cache</title>
</head>
<?php
header("Cache-Control:private");
header("Expires:" .gmdate("D, d M Y H:i:s", time() + 60*60*24) ." GMT");

echo '<pre>';
	print_r(headers_list());
echo '<pre>';
?>
<body>
	
</body>
</html>
<?php

?>