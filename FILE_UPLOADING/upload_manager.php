<?php 



if ($_FILES) // not empty //
//if(is_uploaded_file($_FILES['filename']['tmp_name']))  { 
{
	$target_dir = "temp/";
	$name = $_FILES['gogi']['name'];
    $tmp_name = $_FILES['gogi']['tmp_name'];
	move_uploaded_file($tmp_name, $target_dir.$name);
						// tmp ----to dir/name //
	echo "Uploaded image '$name'<br /><img src='$name' />";
	
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
	echo ($_FILES['gogi']['tmp_name']);
}

?>