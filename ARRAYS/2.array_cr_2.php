<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		h1, h2{ margin: 0; font-family:sans-serif; }
		h1{
			padding: 8px 20px;
			background-color: #dcefd3; text-align: center;
			color: #796a53; border-bottom: 3px solid #fff;
		}
		h2{
			padding: 6px 20px;
			background-color: #fae6cd;color: #1c2555;
			border-bottom: 3px solid #f48560;
		}
	</style>
</head>
<body>
<h1>Զանգ-ի ստեղխման լրացուցիչ ֆ-ներ:</h1>
	<h2>array_fill($start, $length, $value) - միևնույն արժեքով մի շարք էլեմենտներով զանգ-ի ստեղծում:</h2>
	<h3>
		<div>
		<?php
			$start = 10;
			$length = 5;
			$value = 'Gexecik';
			$arr = array_fill($start, $length, $value);
			
			echo('<pre>');
				print_r($arr);
			echo('</pre>');	
		?>	
		</div>
	</h3>
	
	<h2>range($low, $high, $step) - քայլը պարտադիր չէ:</h2>
	<h3>
		<div>
		<?php
			$low = 5;
			$high = 10;
			$step = 0.5;
			$arr1 = range($low, $high, $step);
			
			echo('<pre>');
				print_r($arr1);
			echo('</pre>');	
		?>	
		</div>
	</h3>


</body>
</html>

