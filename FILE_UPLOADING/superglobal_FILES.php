<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
        iframe{
            width: 100%;
            height: auto;
            
        }
        div{
            width: 300px;
            height: auto;
            border: 2px solid grey
        }
        
    </style>
</head>
<body>
	<form method="post" action="superglobal_FILES.php" enctype="multipart/form-data">
	    <fieldset>
	        <legend>Ընտրեք նկարը</legend>
	        <input type="file" name="picture">
	        <input type="submit" value="sending"> 
	    </fieldset>	    
	</form>
	<h2></h2>
	<?php
    if(!empty($_FILES)){
        $name = $_FILES['picture']['name'];
        $type = $_FILES['picture']['type'];
        $size = $_FILES['picture']['size'];
        $tmp_name = $_FILES['picture']['tmp_name'];
        $error = $_FILES['picture']['error'];
        
        
        echo "file name: $name <br>";
        echo "file type: $type <br>";
        echo "file size: $size <br>";
        echo "file tmp_name: $tmp_name <br>";
        echo "file error: $error <br>";
        
        $tmp_name = "temp/".$name;
        echo "<h3><a href = '$tmp_name' target='iframe'>se here </a></h3>";
    }    
    ?>
    <div>
    <iframe src="" name="iframe" frameborder="0"></iframe>
    </div>
</body>
</html>













