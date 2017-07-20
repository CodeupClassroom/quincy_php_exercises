<?php

// Prompt user for a starting number and ending number,
fwrite(STDOUT, 'What\'s the starting number? ');
$startingNumber = trim(fgets(STDIN));
if (! is_numeric($startingNumber)) {
    echo 'You must enter a number!' . PHP_EOL;
    exit;
}

fwrite(STDOUT, 'What\'s the ending number? ');
$endingNumber = trim(fgets(STDIN));
if (! is_numeric($endingNumber)) {
    echo 'You must enter a number!' . PHP_EOL;
    exit;
}

fwrite(STDOUT, 'What\'s the increment? ');
$increment = trim(fgets(STDIN));
if (! is_numeric($increment)) {
    echo 'You must enter a number!' . PHP_EOL;
    exit;
}

// Default increment to 1 if no input.
if ($increment == "") {
    $increment = 1;
}


// then display all the numbers from the starting to ending using a for loop.
// Refactor to allow user to choose increment. (count by 1, 2, 10, ...)
for($i = $startingNumber; $i <= $endingNumber; $i += $increment) {
    echo $i . PHP_EOL;
}

// Make sure you are only allowing users to pass in numbers. Give an error
// message is both passed arguments are not numeric. See php.net/is_numeric.

