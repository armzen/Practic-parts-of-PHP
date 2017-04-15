<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		h2{
			margin: 0; padding: 12px 18px; text-align: center;
			background-color: #c5deca;
		}
		pre{
			border: 2px dotted #0d4693;
		}
	</style>
</head>
<body>

	<h2>Զանգված. print_r() և var_dump()` pre-ի մեջ:</h2>
	<h3>
	<?php

		$arr = array('Good', 'Sunny', 'Day');
		echo('<pre>');
		print_r($arr);
		var_dump($arr);
		echo('</pre>');
	?>
	</h3>
	
	<h2>Զանգ-ի 1-ին էլեմենտի սպոնտան ինդեքսավորում: Մյուսները ավտոմատ ընդունում են հաջորդող թվերը:Increment</h2>
	<h3>
	<?php

		$arr = array(10=>'Good', 'Sunny', 'Day');
		echo('<pre>');
		print_r($arr);
		var_dump($arr);
		echo('</pre>');
	?>
	</h3>
	
	<h2>Զանգ-ի բոլոր էլեմենտների ինդեքսավորում:</h2>
	<h3>
	<?php
		$arr_1 = array(12 => 'Mec',14 => 'Sirun',13 => 'Tonacar');
		echo( '<pre>');
		print_r($arr_1);
		echo( '</pre>');
	?>
	</h3>

	<h2>Զանգ-ի ստեղծ. քառակուսի փակ-երով:</h2>
	<h3>
	<?php
		$arr_2[10] = 'Shat';
		$arr_2[11] = 'Sirun';
		$arr_2[12] = 'Axjik';
		echo( '<pre>');
		print_r( $arr_2 );
		echo( '</pre>');
	?>
	</h3>
	<h2>Զանգ-ի ավտոմատ ինդեքսավորում $arr[]='value';</h2>
	<h3>
	<?php
		$arr3[] = 'Indexnery';
		$arr3[] = 'Inqy';
		$arr3[] = 'Drec';
		echo'<pre>';
			print_r($arr3);
		echo'</pre>';
	?>
	</h3>
	<h2>Փոփոխ-ի տիպաբերում Զանգ-տիպի(array) կամ array();</h2>
	<h3>
	<?php
		$var = "Barev Erkir";
		
		$arr4 = (array)$var;
		echo'<pre>';
			print_r($arr4);
		echo'</pre>';
	?>
	</h3>
</body>
</html>

