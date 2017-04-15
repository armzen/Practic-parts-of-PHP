<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		h1, h2{
			margin: 0; font-family:sans-serif;font-weight: 500;
		}
		h1 {
			padding: 8px 30px;
			background-color: #ffeaea;
			border-bottom: 4px solid #fe541b;
			
		}
		h2{
			padding: 6px 23px;
			background-color: #dbffdd;
		}
		div{
			padding: 4px 18px;
			background-color: #f2f7ff;
		}
		pre{
			border-bottom: 4px solid #03ebd3;
			width: 80%;
		}
		span{
			color: #bb444a;
			font-weight: bold;
		}
	</style>
</head>
<body>
<h1>Ասսոց. զանգերի ստեղծ.-ն լրացուցիչ ֆ.-ներ:</h1>

	<h2><span>array_combine</span> (array $keys,array $values) : եթե քեյը != վալյուին, վերադարձնում է false</h2>
	<h3>
	<?php
		$a = array('red','green','yellow');
		$b = array('apple', 'kiwi', 'banana');
		
		$comby = array_combine($a, $b);
		
			echo '<pre>';
				print_r($comby);
			echo('</pre>');
	?>
	</h3>
	
	<h2><span>compact</span> ($varname1, $varname2 ...) - Ստեղծ. ասսոց. զանգ, հավաքագրելով մի խումբ փոփ.անուններ, որպես պարամետրեր:</h2>
	<h2>Անունները վերցնում ենք չակերտների մեջ՝ ինչպես արժեքը վերցնելուց:<br>Ընդունում է ցանկացած php-տիպի արժեք պարունակող փոփոխական, որպես պարամեր:</h2>
	<h3>
	<?php
		$country = 'Armenia';
		$continent = "Asia";
		$description = "Oldest Country";
		
		$comp = compact("country", 'continent', 'description');
		
			echo '<pre>';
				print_r($comp);
			echo('</pre>');
	?>
	</h3>
	
</body>
</html>

