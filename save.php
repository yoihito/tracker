<?php
//error_reporting(E_ALL);
//ini_set('display_errors','1');
$x = $_GET['x'];
$y = $_GET['y'];
$file = fopen("coords","w");
if (!$file) echo "unsuccess"; else echo "success";
fprintf($file,"%s %s",$x,$y);
fclose($file);
?>
