<?php

function inputsAreNumeric($a, $b) {
    if(is_numeric($a) && is_numeric($b)) {
        return true;
    } else {
        return false;
    }
}

function add($a, $b)
{
    if(inputsAreNumeric($a, $b)) {
        return $a + $b;
    } else {
        return "Error: both arguments must be numbers";
    }
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    if(inputsAreNumeric($a, $b) && $b != 0) {
        return $a / $b;
    } else {
        return "Inputs must be numeric or divisor can't be 0";
    }
}

// Add code to test your functions here
// echo add(2, 3) . PHP_EOL;
// echo subtract(5, 9) . PHP_EOL;
// echo divide(19, 0) . PHP_EOL;
echo add("Bob", "Bob") . PHP_EOL;