<?php

function isEven($input)
{
    // if input is numeric or evenly divisible by 2, then it's even. return true.
    if(is_numeric($input) && $input % 2 === 0) {
        return true;
    }
    
    return false;
}

function isVowel($input)
{
    // if input is not a string or is more than one character, return false.
    if(!is_string($input) || count($input) > 1) {
        return false;
    }

    // reassing $input to a lowercased version of itself. 
    $input = strtolower($input);

    if($input === 'a' || $input === 'e' || $input === 'i' || $input === 'o' || $input === 'u') {
        return true;
    } else {
        return false;
    }
}

function first($input)
{
    if(is_array($input) || is_string($input)) {
        return $input[0];
    }

    return false;
}

function second($input)
{
    if(is_array($input) || is_string($input)) {
        return $input[1];
    }

    return false;
}

function last($input)
{
    if(is_array($input) || is_string($input)) {
        return $input[(count($input) - 1)];
    }

    return false;
}

function reverse($input)
{
    if(is_array($input)) {
        return array_reverse($input);
    } else if(is_string($input)) {
        return strrev($input);
    } else {
        return false;
    }
}

function random($input)
{
    if(is_array($input) || is_string($input)) {
        $randomIndex = mt_rand(0, (count($input) - 1));
        return $input[$randomIndex];
    }

    return false;
}