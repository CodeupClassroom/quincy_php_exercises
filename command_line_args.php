<?php

// number of arguments passed to the script
var_dump($argc);
// array of the arguments passed to the script
var_dump($argv);

// write a script that counts from 1 to a number passed on the command line
if ($argc < 2) {
    echo 'Give me a number to count to!' . PHP_EOL;
    die;
} else if ($argc > 2) {
    echo 'Too many numbers!' . PHP_EOL;
    die;
}

$index = 1;
$stoppingPoint = $argv[1];

while($index <= $stoppingPoint) {
    echo $index . PHP_EOL;
    $index += 1;
}

echo 'All done!' . PHP_EOL;
