<?php

$k = 2;
for($i=2;$i<20;$i++){
	
	for($j=2;$j<$i;$j++){		
		if($i%$j ==0){			
			$j = $i;
			$k ="";
		}
		else{			
			$k=$i;
		}
	}
	echo $k. ' ';
}

?>