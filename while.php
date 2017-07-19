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

// Alter your loop to count backwards by 5's from 100 to -10.

$a = 100;

/* do { */
/*     echo $a . PHP_EOL; */
/*     $a -= 5; */
/* } while ($a >= -10); */

// Create a do-while loop that starts at 2, and displays the result $a * $a on
// each line while $a is less than 1,000,000. Output should equal:

$a = 2;

do {
    echo $a . PHP_EOL;
    $a *= $a;
} while ($a < 1000000);
