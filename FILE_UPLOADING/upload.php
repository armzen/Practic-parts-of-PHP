<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h3, form{ margin: 0; font-weight: 400; background-color: beige}
        h3{ font-family: sans-serif;padding: 10px 5px;}
        form, span{ padding: 5px; width: 400px;background-color: aliceblue; }
        fieldset{ padding: 15px 10px 20px;}
    </style>
</head>
<body>
   <h3>Ներբեռնվող ֆաայլը կհայտնվի նույն թղթապանակի մեջ գտնվող temp թղթապանակում:</h3>
    <form action="upload.php" method="post" enctype="multipart/form-data"> 
        <fieldset>
            <legend>Ընտրեք նկարը ներբեռնման համար:</legend>
            <input type="file" name="pic">
            <input type="submit">
        </fieldset>
    </form>
    <?php
    
    if($_FILES){
        
        $filename = $_FILES['pic']['name'];
        $size = $_FILES['pic']['size'];
        $type = $_FILES['pic']['type'];
        $error = $_FILES['pic']['error'];
        $tmp_name = $_FILES['pic']['tmp_name'];
        echo $tmp_name . ' : is tmp name. <br>';
        
        $enctype = array( 'gif' =>'image/gif', 'jpeg' => 'image/jpeg', 'jpg' => 'image/jpg', 'tiff' => 'image/tiff', 'png' =>'image/png');
        
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        echo ($ext) . ' : extension <br>';

        
        $tmp_direc_to = "temp/"; //you must create new forlder, for uploaded files.
        
        // check size
        if($size < 5*1024*1024){
            
            // check type
            if(in_array($type, $enctype)){
                echo $type . '<br>';
                
                // check extension
                if(array_key_exists($ext, $enctype)){
                    echo ($ext) . '<br>';
                    
                     // check exists and upload
                    if(file_exists("temp/".$filename)){
                        echo "the $filename is already exists";
                    }
                    else{
                        move_uploaded_file($tmp_name,"temp/".$filename);
                        echo 'Your file was uploaded succesfully <br>';
                        
                        echo "<h3><a href=temp/$filename target='__blank'>see your image here</a></h3>"; // sa tesaneli darcnelu hamar
                    }
                    // end check exists and upload
                    
                }
                else{
                    exit ('file has no true format(extension)! <br>');
                }
                // end check extension
                
            }
            else{
                echo 'type is not correct <br>';
            }
            // end check type          
            
        }else{
            echo 'Ֆայլի ծավալը շատ մեծ է: Չպետք է գերազանցի 5ՄԲ-ն <br>';
        }
        // end check size
    }
    else{
        echo '<span>please chose the file </span><br>';
    }
    
    ?>
    
    
</body>
</html>