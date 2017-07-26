<?php

// How do I output the contents of my testFile.txt?

$fileName = "testFile.txt";
$handle = fopen($fileName, 'r');
$contents = fread($handle, filesize($fileName));
echo $contents;

fclose($handle);

