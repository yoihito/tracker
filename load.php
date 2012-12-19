<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
$file = fopen("coords","r");
fscanf($file,"%s %s",$x,$y);
echo json_encode(array("lat"=>$x,"lng"=>$y));
fclose($file);
?>