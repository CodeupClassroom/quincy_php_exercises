<?php

$names = ['Bob', 'Bobby', 'Jerry', 'Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Jerry', 'Amy', 'Michael', 'Bobby'];

// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.

function isInArray($needle, $haystack) 
{
    // if $needle exists anywhere in the array $haystack, return true.
    // otherwise, return false.

    // be CAREFUL b/c array_search returns the index and that index may be zero

    if(array_search($needle, $haystack) === false) {
        return false;
    } else {
        return true;
    }
}


if(isInArray("Tina", $names)) {
    echo "Tina is in the array" . PHP_EOL;
} else {
    echo "Tina aint in the array" . PHP_EOL;
}

if(isInArray("Bob", $names)) {
    echo "Bob is in the array, babay and he's here to stay, yay!" . PHP_EOL;
} else {
    echo "Bob aint in the array." . PHP_EOL;
}



// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().
function numberOfValuesInCommon($array1, $array2)
{
    $count = 0;

    // $value first time through the array is the string 'Tina'
    foreach($array1 as $value) {
        if(array_search($value, $array2) === false) {
            $count++;
        }
    }
    return $count;
}




echo "The number of values that \$names and \$compare have in common is " . numberOfValuesInCommon($names, $compare) . PHP_EOL;