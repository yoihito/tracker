<?php
$file = fopen("coords","r");
fscanf($file,"%s %s",$x);
echo $x;
echo $y;
fclose($file);
?>