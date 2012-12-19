<?php
$x = $_GET['x'];
$y = $_GET['y'];
$file = fopen("coord.txt","w");
fprintf($file,"%s\n%s",$x,$y);
fclose($file);
echo "success";
?>