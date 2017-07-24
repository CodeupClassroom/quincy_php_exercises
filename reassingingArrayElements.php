<?php

$todos = [
    'take out the trash',
    'do the dishes',
    'laundry',
    'call people back'
];

// iterate through the array of chores and capitalize the first letter of each chore.
// make sure that when the array is done, you can print_r the results AFTER the foreach
foreach($todos as $key => $todo) {
    // $todo is a copy of $todos[$key]
    $todos[$key] = ucfirst($todo);
}

print_r($todos);