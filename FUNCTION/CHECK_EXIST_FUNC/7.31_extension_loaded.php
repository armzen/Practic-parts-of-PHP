<?php

$ftp_funcs = extension_loaded('ftp');

if($ftp_funcs) {
    echo 'ftp modul is loaded.';
}else{ echo 'ups ftp.';}

?>