<?php 

$filename = 'cities.txt';
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
// echo $contents;
$contents = trim($contents);
$contentsArray = explode("\n", $contents);
print_r($contentsArray);
fclose($handle);