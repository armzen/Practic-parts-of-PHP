<!DOCTYPE HTML>
<html lang="en-US">
<head>
<?php
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

session_cache_expire(30);
$cache_expire = session_cache_expire();

echo '<pre>';
echo $cache_limiter . '<br>'.$cache_expire . '<br>';
echo '</pre>';
?>
	<meta charset="UTF-8">
	<title>Cache Control with special function.</title>
</head>
<body>
	<ul>
		<li><h3>session_cache_limiter('')</h3></li>
		<li>public</li>
		<li>private_no_expire</li>
		<li>private</li>
		<li>nocache</li>
	</ul>
	<ul>
		<li><h3>session_cache_expire(int)</h3></li>
		<li>minue, for example: 30</li>
	</ul>
</body>
</html>

