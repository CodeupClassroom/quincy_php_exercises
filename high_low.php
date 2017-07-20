<?php

// make sure that we are passed the correct # of args
if ($argc !== 3) {
    echo 'Please pass the minimum and maximum for the game.' . PHP_EOL;
    echo PHP_EOL;
    echo 'Usage:' . PHP_EOL;
    echo '    php high_low.php <min> <max>' . PHP_EOL;
    exit;
}

$min = $argv[1];
$max = $argv[2];

// game picks a random number between 1 and 100.
$secretNumber = rand($min, $max);
$numberOfGuesses = 0;
echo "The secret number is: $secretNumber!" . PHP_EOL;

// LOOP
do {
    // prompts user to guess the number
    echo 'What\'s your guess? ';
    $userGuess = trim(fgets(STDIN));

    // validate user input
    if (! is_numeric($userGuess)) {
        echo 'Hey!!! That\'s not a number!' . PHP_EOL;
        continue;
    }

    $numberOfGuesses += 1;

    // if user's guess is less than the number, it outputs "HIGHER"
    if ($userGuess < $secretNumber) {
        echo 'Higher!' . PHP_EOL;
    }
    // if user's guess is more than the number, it outputs "LOWER"
    if ($userGuess > $secretNumber) {
        echo 'Lower!' . PHP_EOL;
    }
    // if a user guesses the number, the game should declare "GOOD GUESS!"
    if ($userGuess == $secretNumber) {
        echo 'Good Guess!' . PHP_EOL;
        echo 'It took you ' . $numberOfGuesses . ' guesses!' . PHP_EOL;
    }

} while ($userGuess != $secretNumber);


