<?php

function titleCase($str)
{
    return ucfirst(strtolower($str));
}

// echo titleCase("aBc") . PHP_EOL;

function greeting($firstName, $lastName)
{
    $returnValue = "";
    if (is_string($firstName) && is_string($lastName)) {
        $returnValue = "Hello, $firstName $lastName!";
    } else {
        $returnValue = "Sorry, two valid names were not given.";
    }
    return $returnValue;
}

// echo greeting("Justin", 23) . PHP_EOL;
// echo greeting("Justin", "Reich") . PHP_EOL;