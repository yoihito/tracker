<?php
$file = fopen("coords","r");
fscanf($file,"%s",$x);
fscanf($file,"%s",$y);
echo $x;
echo $y;
fclose($file);
?>