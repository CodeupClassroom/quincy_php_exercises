<?php

$test = 5;

// Create a while loop that checks $test <= 15
// and increment $test by 1 inside the loop.
// Before incrementing $test, output each iteration (echo $test with
// newline) and display results.

/* while ($test <= 15) { */
/*     echo "{$test}\n"; */
/*     $test += 1; */
/* } */

// do while

// Create a do-while loop that will count by 2's starting with 0 and ending at
// 100. Follow each number with a newline.

$a = 0;

do {
    echo $a . PHP_EOL;
    $a += 2;
} while ($a <= 100);
