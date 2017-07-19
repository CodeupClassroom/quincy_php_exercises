<?php

// game picks a random number between 1 and 100.
$secretNumber = rand(1, 100);
echo "The secret number is: $secretNumber!" . PHP_EOL;

// LOOP
do {
    // prompts user to guess the number
    // if user's guess is less than the number, it outputs "HIGHER"
    // if user's guess is more than the number, it outputs "LOWER"
    // if a user guesses the number, the game should declare "GOOD GUESS!"
} while (/* the guess is not equal to the random number */);


