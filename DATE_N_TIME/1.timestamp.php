<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>timestamp</title>
</head>
<body>
	<h3>TimeStamp genetrated by time() function.</h3>
	<?php
	date_default_timezone_set('Asia/Yerevan');

	$timestamp = time()-60*60*24*365*8 - 60*60*24*2; // 2 angam petrvari 29
	echo $timestamp.'<br>';
	
	$ds = date("D, d M Y ",$timestamp);	
	echo $ds . '<br>';
	
	
	
	
	echo date("d M Y "). '<br>';
	echo date(" F j-S, Y H:i:s T"). '<br>';
	
//mktime(Ժամ, րոպե, վայրկյան, ամիս, օր, տարի)
	$mt = mktime(17,35,48,3,17,2015);
	echo $mt.'<br>';
	$md = date('l, d- M- Y',$mt);
	echo $md . '<br>';
	
	echo date('e');
	?>
</body>
</html>