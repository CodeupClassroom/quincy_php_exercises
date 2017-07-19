<?php

$students = [
    'Emanuelle',
    'Jennifer',
    'Vivian',
    'Analyssa',
    'David Jex',
    'Hunter',
    'Avery',
    'Kristie',
    'Eric',
    'Cody',
    'Emmett',
    'Doug',
    'Daniel',
    'Gonzalo',
    'Chloe',
    'David Newton',
    'Alex',
];

shuffle($students);

echo 'Ready? ';
fgets(STDIN);

while($student = array_pop($students)) {
    echo "--> {$student} <--" . PHP_EOL;
    fgets(STDIN);
}

echo 'All Done!' . PHP_EOL;
