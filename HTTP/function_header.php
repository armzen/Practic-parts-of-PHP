<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
header('my-message: its my message');
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

//$url = 'http://www.tutorialrepublic.com/';
/**
* for setting default charset , instead of .htaccess
header("Content-Type: text/html;charset=windows-1251"); 
*/



/**
* http-header for only download files from server
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="tester_for_reloading.txt"');
readfile('tester_for_reloading.txt');
*/

/**
* http-header, for only redirection
header('Location: http://www.tutorialrepublic.com/');
header('Location: http://html-color-codes.info/');
header('Location: http://localhost/WEBEX.am/switch_case/HTTP/tester_for_redirecting.txt');
header('Location: http://localhost/WEBEX.am/switch_case/FUNCTION/7.1-2.simple_function.php');
*/

/*  yes chunemm ays f-i podderjken
echo headers_sent($filename, $linenumber);
*//*
echo '<pre>';
print_r(get_headers($url, TRUE));
echo '<pre>';
*/

echo '<pre>';
print_r(headers_list());
echo '</pre>';

?>
	<meta charset="UTF-8">
	<!--<meta http-equiv="refresh" content="0 , URL=http://www.softtime.ru"/>-->
	<title></title>
</head>
<body>
	
	<p>hello from 1</p>
</body>
</html>