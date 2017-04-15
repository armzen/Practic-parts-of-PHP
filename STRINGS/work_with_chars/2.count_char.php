<?php

$str = "Barev";

$result = count_chars($str, 0);

for($i = 0; $i < count($result); $i++) {
	
	if($result[$i] !=0 ){
		
		echo "'".chr($i) . "' handipum e toxum  $result[$i] angam .<br>"; 
	}
	
}

?>