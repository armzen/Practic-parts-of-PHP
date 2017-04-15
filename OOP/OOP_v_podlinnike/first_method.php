<?php

	class MathPlusMek
	{
		public  $a, $b, $c;
		public function add($a, $b)
		{
			return $this->c = $a+$b;
		}
	}
	
	$obj = new MathPlusMek();
	$obj ->a = 15;
	$obj ->b = 25;
	
	 echo $obj->add(10,20) .'<br>';


?>