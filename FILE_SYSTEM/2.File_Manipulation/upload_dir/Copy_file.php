<?php

if(copy("../1.File_Cretion/dir/test_touch.txt", "copy_dir/test_touch_copied.txt")){
	echo "Successfuly copied.";
}
else{
	echo 'Can not copy this file.<br>';
}

?>