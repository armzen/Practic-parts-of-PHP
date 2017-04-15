<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
// ցանկացած հին ամսաթիվ
header("Expires: Sun, 7 Sep 1997 05:00:00 GMT");
header('Last-Modifed:' . gmdate("D, d M Y H:i:s"). 'GMT'); // ըթացիկ ժամանակը
header("Cache-Control: no-cache, must-revalidate"); // պեքտ չի քեշավորել
header('Pragma:no-cache');							// HTTP 1.0 - ի համար այպես է գրվում

echo '<pre>';
print_r(headers_list());
echo '</pre>';
?>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
date_default_timezone_set("Asia/Yerevan");
$d = date(e);
echo $d;
?>
</body>
</html>
