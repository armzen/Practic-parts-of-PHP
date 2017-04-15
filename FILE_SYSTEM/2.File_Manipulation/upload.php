
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php

if($_FILES){
	
	if(is_uploaded_file($_FILES['filename']['tmp_name'])) {
		echo "Has been selected file: ". $_FILES['filename']['name'] ."<br>";
		 // + $_FILES['filename']['name'];
		echo " It's in temp directory: ". $_FILES['filename']['tmp_name']."<br>"; 
		// + $_FILES['filename']['name'];
		echo "For uploading push the button 'upload'. <br><br>";
	}
	
	$filename = $_FILES['filename']['name'];
	$tmp_name = $_FILES['filename']['tmp_name'];
	$file_size = $_FILES['filename']['size'];
	$file_type = $_FILES['filename']['type'];
	$file_erro = $_FILES['filename']['error'];

	echo 'filename: '.$filename .'<br>';
	echo 'tmp_name: '.$tmp_name .'<br>';
	echo 'file_size: '.$file_size .'<br>';
	echo 'file_type: '.$file_type .'<br>';
	echo 'file_erro: '.$file_erro .'<br>';
	
	$target_dir = "upload_dir/";
	
	if($_POST['pushed'] && !file_exists($target_dir.$filename)){
		move_uploaded_file($tmp_name, $target_dir.$filename);
		echo "file $filename uploaded <br>";
	}else{
		echo "file $filename already exists <br>";
	}	
}

?>

	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="filename"/>
		<input type="submit" value="upload" name="pushed"/>
	</form>
</body>
</html>