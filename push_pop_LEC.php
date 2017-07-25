<?php 

$foods = [

    'fruit' => 'apple',
    'meat' => 'chicken',
    'cheese' => 'feta',
    'dessert' => 'key lime pie',
    'veggie' => 'zucchini',
    'bread' => 'honey oat bread'

];


	// array_shift()
	// $keepsTheDocAway = array_shift($foods);
	// echo $keepsTheDocAway;

	// print_r($foods);


// array_pop()

	// $carbs = array_pop($foods);
	// echo $carbs . PHP_EOL;

	// print_r($foods);


// array_unshift() - CANNOT control keys

	// array_unshift($foods, 'smarties');
	// print_r($foods);

	// How to prepend associative elements
		$prependArray = ['candy' => 'smarties']; 
		$foods = $prependArray + $foods;

		print_r($foods);


// array_push()

	// add and element with the key of 'dairy' and value 'milk' to the end of $foods array
	// array_push($foods, 'milk');



		$appendArray = ['dairy' => 'milk'];
		$foods = $foods + $appendArray;
		// $foods += $appendArray;


	print_r($foods);




