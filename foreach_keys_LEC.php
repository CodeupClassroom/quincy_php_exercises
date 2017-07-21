<?php 


// Foreach with keys: mostly used in interating over associative arrays

/* Foreach without keys

	foreach($things as $thing) {
		// $things will access the array
		// $thing will access a single element
	}

*/



/* Foreach with keys syntax:

	
	foreach($things as $key => $thing) {
		// $things will access the array
		// $key will access the index 
			(index referring to a number in a numerically indexed array 
				or 
			another php primitive data type in an associative array)
		// $thing will access a single element
	}

*/



// *** CURRICULUM NUMBERS EXAMPLE ***	

	// $numbers = [1, 2, 3, 4, 5];
	// foreach ($numbers as $key => $value) {
	//     echo "\$value has a key of {$key} and a value of {$value}\n";
	// }



// echo each value in an associative array

	// $me = [

	// 	"firstName" => "Justin",
	// 	"yearsOld" => 31,
	// 	"hairColor" => "brown",
	// 	"isOld" => "false"

	// ];


// echo each key and value in an associative array

	// foreach($me as $key => $value) {
	// 	echo "{$key} = {$value}" . PHP_EOL;
	// }
 

// *** CURRICULUM MULTIDIMENSIONAL ARRAY EXAMPLE ***	

	$students = array(
	    array('name' => 'Virginia Potts', 'age' => 29),
	    array('name' => 'Elon Musk', 'age' => 42),
	    array('name' => 'Rasmus Lerdorf', 'age' => 45),
	    array('name' => 'Marissa Mayer', 'age' => 38)
	);

// echo the second student's age

	// echo $students[1]['age'];

// echo all student names and ages by referring explicitly to the associative key

	// foreach ($students as $student) {
	// 	echo "{$student['name']} is {$student['age']} years old.\n";
	// }


// echo all student names and ages with nested foreach loops

	// foreach ($students as $student) {
	// 	echo "=================\n";
	// 	foreach($student as $key => $attribute) {
	// 		echo "{$key} is {$attribute}\n";
	// 	}
	// }



