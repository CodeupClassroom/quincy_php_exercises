<?php

function getInput($message) {
    fwrite(STDOUT, $message);
    $userInput = trim(fgets(STDIN));
    return $userInput;
}

$firstName = getInput("Please input your firnfst name.");

$lastName = getInput("Please input your last name");

echo "Hi there, $firstName. I hear your last name is $lastName" . PHP_EOL;
