<?php 


// Implode
	$foods = ['apple', 'chicken', 'feta', 'key lime pie', 'zucchini', 'honey oat'];

	// $foodsString = implode(", ", $foods);
	// echo $foodsString;


// Explode
	// $anotherFoodsString = "apple,chicken,feta,key lime pie,zucchini,honey oat";

	// $foodsArray = explode(",", $anotherFoodsString);





// Partially explode

	$anotherFoodsString = "apple,chicken,feta,key lime pie,zucchini,honey oat";

	$anotherFoodsArray = explode(",", $anotherFoodsString, 3);

	print_r($anotherFoodsArray);



