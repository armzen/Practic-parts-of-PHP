<?php

require_once "Voxjuyn.class.php";

class Respect extends Voxjuyn
{
	public $name="Revaz";
	public function __construct(){
		
		parent::__construct();
		
	}
	
	public function voxj3(){
		
		echo "<br> Respect voxj3()-ov";
		parent::voxj3();
	}
}
?>