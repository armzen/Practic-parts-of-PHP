<?php

require_once "Voxjuyn.class.php";

	

	class Barevner extends Voxjuyn
	{
		public function __construct(){
			parent::__construct();
		}
		
		public function barev1() {
			echo 'Barev';
		}
		
		
		// nuyn anunov method ka naev Voxjuyn-um
		public function voxj1() {
					
			echo '<br> Voxj arden Barevneric!';
			echo '<br> texi unecav voxj1()-i verasahmanum!';
		}
		
		public function voxj1_parent(){
			parent::voxj1();
		}		
			
	}
	
	
	
	
?>