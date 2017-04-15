<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>work with files and directories.</title>
</head>
<body>
<ul>
	<li>if(file_exist('file_name'))</li>
	<li>opening...</li>
	<li>&nbsp;&nbsp;&nbsp; $handle = fopen( 'file_name','mode') / ֆայլի անուն, ռեժիմ</li>
	<li>reading...</li>
	<li>&nbsp;&nbsp;&nbsp; fread(file handle, length in bytes)</li>
	<li>&nbsp;&nbsp;&nbsp; filesize('data.txt');</li>
	<li>or</li>
	<li>&nbsp;&nbsp;&nbsp; file_get_contents('data.txt') </li>
	<li>or</li>
	<li>&nbsp;&nbsp;&nbsp; file('data.txt') , but will show as array.</li>
	<li>closing...</li>
	<li>&nbsp;&nbsp;&nbsp; fclose(file handle); / fclose($handle); / ֆայլի փակման ֆունցիա</li>
	
</ul>
<?php
	//$handle = fopen('data.txt','r');
	if(file_exists('data.txt')){
		$handle = fopen('data.txt','r');
		$content = fread('data.txt', "20");
		echo $content;
		$get_cont = file_get_contents('data.txt');
		echo $get_cont;
		$file = file('data.txt');
		print_r($file);
	}else{
		die ('<strong>Error: </strong> The file you are trying to access doesn\'t exists.');
	}
	fclose($handle);
?>
</body>
</html>