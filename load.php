<?php
$file = fopen("coords","r");
fscanf($file,"%s\n",$x);
fscanf($file,"%s\n",$y);
echo $x;
echo $y;
fclose($file);
?>