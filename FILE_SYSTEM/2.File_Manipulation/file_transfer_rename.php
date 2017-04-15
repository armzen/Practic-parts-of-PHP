<?php
$filename = "file_for_transfer_rename.txt";
if(fopen($filename, "w") &&
   rename($filename, "transfer_dir/$filename"))
   {
   	echo "File successfully created and transfered. <br>";
   }
?>