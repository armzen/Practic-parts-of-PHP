<?php
class Voxjuyn 
{
	public $name = "Default_Name";
	public $pass;
	
	public function voxj1() {		
		echo '<br> Voxj!';
	}
	
	public function voxj2() {		
		echo '<br> Aroxj!';
	}
	
	public function voxj_by_name($n) {
		
		$this->name = $n;
		echo "Barev $n !";
	}
	
	public function voxj3() {
		
		$this->voxj2();
		echo "Gorcec voxji 3-rd@ .";
	}
}
?>