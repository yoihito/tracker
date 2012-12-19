<?php
$file = fopen("coords","r");
fscanf($file,"%s\n%s",$x);
echo $x;
echo $y;
fclose($file);
?>