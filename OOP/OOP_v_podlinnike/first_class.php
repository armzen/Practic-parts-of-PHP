<?php

class MathPlus
	{
		public $a, $b;
		static $c;
		 static function add($a, $b)
		{
			return $a = $a+$b;
		}
	}
 echo '<p>MathPlus::add(2,4) // '. MathPlus::add(2,4) . '<br>';
 echo '<p>MathPlus::$c = 10; // '. MathPlus::$c = 10 . '<br>';
/* ,որտեղ c-ն անպայման ստատիկ է:*/
 
 class MathPlusMek
	{
		public  $a, $b;		
		public function add($a, $b)
		{
			return $this->a = $a+$b;
		}
	}

 $obj = new MathPlusMek;
 echo $obj->add(1,5) . '<br>';
 echo $obj->a;
?>