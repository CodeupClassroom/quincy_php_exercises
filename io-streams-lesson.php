<?php

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your first name? ');

// Get the input from user
$firstName = trim(fgets(STDIN));

var_dump($firstName);

if ($firstName == 'admin') {
    echo "Here are the nuclear launch codes: 12345" . PHP_EOL;
} else {
    echo 'No launch codes for you!' . PHP_EOL;
}



/* // Output the user's name */
/* fwrite(STDOUT, "Hello $firstName\n"); */
