<?php

$var = mysql_query("SELECT VERSION()") or exit("can not get version");

echo $var;

?>