<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h3{ font-weight: 300; font-family: sans-serif}
    </style>
</head>
<body>
   <h3> Ցիկլի, func_num_args() և func_get_arg($i) միջոցով տպում ենք բլր. պարամ.-ը</h3>
    <?php
    
    function arg_list() {
        
        for($i = 0; $i < func_num_args(); $i++) {
            echo func_get_arg($i) . '<br>';
        }        
    }
    
    arg_list( 5, 'Barev', 35, 'Arev');
    
    function param_list() {
        echo '<pre>';
            print_r(func_get_args());
        echo '</pre>';
    }
    
    param_list( 7,'urax',9, 'arev');
    ?>
</body>
</html>