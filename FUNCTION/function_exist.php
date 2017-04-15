<?php
echo '<h2>';

if( function_exists("array_combine")){
    echo 'array_combine() function is exist in this PHP version.';
}
else{
    echo 'array_combine() is not exist in this PHP version.';
}

echo '</h2>';
?>