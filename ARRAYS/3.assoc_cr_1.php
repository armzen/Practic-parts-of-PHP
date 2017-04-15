<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		h1, h2, h3 {
			margin: 0; font-family:sans-serif;
		}
		h1 {
			padding: 8px 30px;
			background-color: #ffeaea;
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
	</style>
</head>
<body>
<h1>Ասոց. Զանգեր:</h1>
<h2>Ասսոցիատիվ զանգ-ի ստեղծումը:</h2>
	<h3>
		<?php			
			$assoc = array('one' => "1", 'two' => "20");
			echo '<pre>';
				print_r($assoc);
			echo '</pre>';
		?>
	</h3>
	<h2>Ասսոցիատիվ զանգ-ի ստեղծումը` անմիջապես էլեմենտներին դիմելով:</h2>
	<h3>
		<?php			
			$assoc1['arajin'] = "10";
			$assoc1['erkrord'] = "20";
			echo '<pre>';
				print_r($assoc1);
			echo '</pre>';
			echo '<br>'.$assoc1['arajin'];
		?>
	</h3>



</body>
</html>


