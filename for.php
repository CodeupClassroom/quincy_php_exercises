<?php

// Prompt user for a starting number and ending number,
fwrite(STDOUT, 'What\'s the starting number? ');
$startingNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'What\'s the ending number? ');
$endingNumber = trim(fgets(STDIN));

// then display all the numbers from the starting to ending using a for loop.
for($i = $startingNumber; $i <= $endingNumber; $i += 1) {
    echo $i . PHP_EOL;
}

// Refactor to allow user to choose increment. (count by 1, 2, 10, ...)

// Default increment to 1 if no input.

// Make sure you are only allowing users to pass in numbers. Give an error message is both passed arguments are not numeric. See php.net/is_numeric.


