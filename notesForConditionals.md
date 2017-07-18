# Notes for "Control Structures"

if, ifelse, switch, for, while, do-while

## Short Version
if, if else, if elseif, else, for loop, while, do-while == same syntax in PHP as in JS

## Conditionals
Conditional is a programatic way of having code "make" a decision

$today = "Tuesday";

if($today == "Friday") {
    echo "TGIF. I get to watch full house and urkel.";
} else {
    echo "The variable \$today is anything in the world except for the string 'Friday'";
}

Inside the parenthesis of an if, we need a comparison of values or anything that evaluates to a true or false

==
===
!=
!==
>
<
>=
$today = 'Tuesday';
$isRainingTomorrow = 'no';


if(is_bool($isRainingTomorrow) && $isRainingTomorrow) {
    echo "I'll bring my umbrella Wednesday";
} 



$message = '';

if($isRainingTomorrow) {
    $message = "bringing the umbrella";
} else {
    $message = "yay, more heat and no rain.";
}

$message = ($isRainingTomorrow && $iHaveAnUmbrella) ? 'bring the umbrella' : 'yay, more heat and no rain'; 