<?php
$filename = "file_for_transfer.txt";
$crf =  touch($filename); 
	if($crf > 0){
		echo "file created. <br>";
	}
	 
	if( copy($filename, "transfer_dir/$filename") && unlink($filename))
		{			
			echo "File successfuly transfered. <br>";
		}
		
?>