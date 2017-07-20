<?php

$numbers = ['zero', 'one', 'two', 'three', 'four', 'five'];

/* for ($i = 0; $i < count($numbers); $i++) { */
/*     $number = $numbers[$i]; */
/*     echo 'The number is: ' . $number . '!' . PHP_EOL; */
/* } */


foreach ($numbers as $number) {
    echo 'The number is: ' . $number . '!' . PHP_EOL;
}

$animalTypes = array('dogs', 'cats', 'birds', 'narwhals');

foreach ($animalTypes as $animalType) {
    echo 'The totally real existent animal type is: ' . $animalType . '!' . PHP_EOL;
}
