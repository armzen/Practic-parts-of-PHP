<?php
$dirname = pathinfo("http://localhost/WEBEX.am/switch_case/FILE_SYSTEM/Files/pathinfo_options.php", PATHINFO_DIRNAME);

echo 'dirname: '. $dirname . '<br>';

$basename = pathinfo("http://localhost/WEBEX.am/switch_case/FILE_SYSTEM/Files/pathinfo_options.php", PATHINFO_BASENAME);

echo 'basename: '.$basename . '<br>';

$extension = pathinfo("http://localhost/WEBEX.am/switch_case/FILE_SYSTEM/Files/pathinfo_options.php", PATHINFO_EXTENSION);

echo 'extension: '.$extension . '<br>';

$filename = pathinfo("http://localhost/WEBEX.am/switch_case/FILE_SYSTEM/Files/pathinfo_options.php", PATHINFO_FILENAME);

echo 'filename: ' .$filename . '<br>';

?>