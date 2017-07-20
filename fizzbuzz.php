<?php

for ($i = 1; $i <= 100; $i += 1) {
    $msg = '';

    if ($i % 3 === 0) {
        $msg .= 'fizz';
    }

    if ($i % 5 === 0) {
        $msg .= 'buzz';
    }

    echo $msg !== '' ? $msg : $i;
    echo PHP_EOL;
}
