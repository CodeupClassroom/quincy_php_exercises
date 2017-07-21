<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
        echo "Moonday" . PHP_EOL;
        break;
     case 2:
        echo "Tuesday" . PHP_EOL;
        break;
    case 3:
        echo "Odin's Day" . PHP_EOL;
        break;
    case 4:
        echo "Thor's Day" . PHP_EOL;
        break;
    case 5:
        echo "Friday, friday, gotta get down on friday..." . PHP_EOL;
        break;
    case 6:
        echo "Saturn's Day" . PHP_EOL;
        break;
    case 7:
        echo "Sunday" . PHP_EOL;
        break; 
 }