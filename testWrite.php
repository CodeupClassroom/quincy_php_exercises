<?php

// require "library.php";

$filename = "instructors.txt";

$instructors = ['Zach', 'Justin', 'Luis', 'Fer', 'Ryan'];


foreach($instructors as $instructor) 
{
    append($filename, $instructor . PHP_EOL . PHP_EOL);
}



function append($filename, $stringToWrite) 
{
    $handle = fopen($filename, 'a');
    fwrite($handle, $stringToWrite);
    fclose($handle);
}
