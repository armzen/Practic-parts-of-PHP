<?php
$k=2;
for($i=2;$i<100;$i++) {

	for ($j=2;$j<$i;$j++) {
	 
		if(($i%$j)==0) {
			$k=""; $j=$i;
		}
		else $k=$i;
		}
	echo $k." ";
 }
?>