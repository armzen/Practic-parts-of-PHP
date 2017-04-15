<?php
 $str = "Barev Ashxarh";

$s1 = strlen($str);
echo $s1 . '<br>';

$s2 = iconv_strlen($str);
echo $s2 . '<br>';

$s3 = mb_strlen($str);
echo $s3 . '<br><br>';

for($i = 0; $i < mb_strlen($str); $i++) {
	echo $str[$i] . '<br>';
}
echo '<hr>';

$chr = chr(76);
echo $chr . '<br>'; // L

$ord = ord('L');
echo $ord . '<br>'; // 76


?>