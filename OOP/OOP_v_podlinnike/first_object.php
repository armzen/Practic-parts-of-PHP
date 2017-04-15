<?php

class MathPlus
{
	public  $a, $b;	
	public function add($a, $b)
	{
		return $this->a = $a+$b;
	}
}

 $obj = new MathPlus;

 $obj->a = 2;
 $obj->b = 3;

 echo $obj->a . '<br>';
 echo $obj->b . '<br>';

 $arr = ['one' => 'mek', 'two' => 'erku'];
 echo $arr['one'] . '<br>';
 echo $arr['two'] . '<br>';
?>