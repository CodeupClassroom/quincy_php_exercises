<?php

function isEven($input) 
{
    if(is_numeric($input)) {
        return $input % 2 === 0;
    }
    return false;
}

function isVowel($input)
{
    if(!is_string($input) && count($input) !== 1) {
        return false;
    }
    
    $input = strtolower($input);

    if($input === 'a' || $input === 'e' || $input === 'i' || $input === 'o' || $input === 'u') {
        return true;        
    } else {
        return false;
    }
}

function first($input)
{
    if(is_string($input) || is_array($input)) {
        return $input[0];
    }
}

function second($input)
{
    if(is_string($input) || is_array($input)) {
        return $input[1];
    }
}

function last($input)
{
    if(is_string($input)) {
        return $input[(strlen($input) -1)];
    } 

    if(is_array($input)) {
        return $input[(count($input) -1)];
    }
}

function reverse($input)
{
    if(is_string($input)) {
        return strrev($input);   
    }

    if(is_array($input)) {
        return array_reverse($input);
    }
}

function random($input) {
    if(is_string($input)) {
        $randomIndex = mt_rand(0, strlen($input) -1);
        return $input[$randomIndex];
    }

    if(is_array($input)) {
        $key = array_rand($input);
        return $input[$key];
    }
}