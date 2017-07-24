<?php

// TODO: Create your inspect() function here

/* CONDITIONS to check for...

    int
    float/double
    NULL
    array
        empty array
        not empty array
    boolean
        true
        false
    string
        empty string
        not empty string

*/

















// function inspect($data)
// {
    
//     $message = "";

//     if (is_int($data)) {
//         $message = "The integer is $data.";
//     } elseif (is_double($data)) {
//         $message = "The double is $data.";
//     } elseif (is_null($data)) {
//         $message = "The value is NULL.";
//     } elseif (is_array($data)) {
//         if (empty($data)) {
//             $message = "The value is an empty array.";
//         } else {
//             $message = "The value is an array.";
//         }
//     } elseif (is_bool($data)) {
//         if ($data) {
//             $message = "The boolean is TRUE.";
//         } else {
//             $message = "The boolean is FALSE.";
//         }
//     } elseif (is_string($data)) {
//         if (empty($data)) {
//             $message = "The string is empty.";
//         } else {
//             $message = "The string is $data.";
//         }
//     }

//     return $message;

// }



// refactor with gettype()
function inspect($data) {
	$message = "";
    $type = gettype($data);
    switch ($type) {
        case 'NULL':
            $message = 'The value is NULL.';
            break;
        case 'array':
            if (!empty($data)) {
                $message = 'The value is an array';
            } else {
                $message = 'The value is an empty array';
            }
            break;
        case 'boolean':
            if ($data) {
                $message = 'The value is TRUE';
            } else {
                $message = 'The value is FALSE';
            }
            break;
        case 'string':
            if (empty($data)) {
                $message = 'The value is an empty string';
            } else {
                $message = "The $type is $data"; 
            }
            break;
        default:
            $message = "The $type is: $data"; 
            break;
    }

    return $message;

}


// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;


// // TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1: ' . inspect($num1) . PHP_EOL;

echo 'Inspecting $num2: ' . inspect($num2) . PHP_EOL;

echo 'Inspecting $num3: ' . inspect($num3) . PHP_EOL;

echo 'Inspecting $num4: ' . inspect($num4) . PHP_EOL;

echo 'Inspecting $null: ' . inspect($null) . PHP_EOL;

echo 'Inspecting $bool1: ' . inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2: ' . inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1: ' . inspect($string1) . PHP_EOL;

echo 'Inspecting $string2: ' . inspect($string2) . PHP_EOL;

echo 'Inspecting $array1: ' . inspect($array1) . PHP_EOL;

echo 'Inspecting $array2: ' . inspect($array2) . PHP_EOL;










// ==================================================================== testing refactor

// $dataTypeList = [
//     $num1,
//     $num2,
//     $num3,
//     $num4,
//     $null,
//     $bool1,
//     $bool2,
//     $string1,
//     $string2,
//     $array1,
//     $array2
// ];

// $dataTypeNames = [
//     '$num1',
//     '$num2',
//     '$num3',
//     '$num4',
//     '$null',
//     '$bool1',
//     '$bool2',
//     '$string1',
//     '$string2',
//     '$array1',
//     '$array2'
// ];

// for ($i = 0; $i < count($dataTypeList); $i++) {
//     echo "Inspecting $dataTypeNames[$i]: " . inspect($dataTypeList[$i]) . PHP_EOL;
// }






