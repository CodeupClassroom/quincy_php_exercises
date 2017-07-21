<?php

// 1. Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

// 2. Construct a loop that iterates through each value and outputs only values with a type that is scalar.

// output
    // Sgt. Pepper
    // 11

    // Array (loop through inner array display here)
    // 3.14
    // 12 + 7

    // 11

/** HINT - use PHP functions like is_bool(), is_scalar(), is_float() */

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


// foreach($things as $thing) {
//     if(is_integer($thing)) {
//         echo "$thing is an integer" . PHP_EOL;
//     } else if (is_float($thing)) {
//         echo "$thing is a float" . PHP_EOL;
//     } else if(is_bool($thing)) {
//         echo "$thing is a boolean" . PHP_EOL;
//     } else if (is_array($thing)) {
//         echo "$thing is an array" . PHP_EOL;
//     } else if(is_null($thing)) {
//         echo "null" . PHP_EOL;
//     } else if(is_string($thing)) {
//         echo "$thing is a string" . PHP_EOL;
//     }
// }

// foreach($things as $thing) {
//     if(is_scalar($thing)) {
//         echo $thing . PHP_EOL;
//     }
// }

foreach($things as $thing) {
    if(is_array($thing)) {
        foreach($thing as $element) {
            echo $element . " ";
        }
    } else {
        echo $thing . PHP_EOL;
    }
}