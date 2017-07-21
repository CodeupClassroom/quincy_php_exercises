<?php 

	// Create a program using PHP control structures that will perform a series of calculations based on the type of numbers in a given array. The calculations will start working with zero and the final result will be echoed after each array element calculation is performed.

		// negative numbers should first be converted to positive numbers
		// no calculation should be performed for non-numeric elements

		// odd numbers will be added to the result
		// even numbers will be multiplied to the result

		/* 
			
			EXAMPLE:

			$result = 0;
			$testArray = [2, 1, -5, "bob"];

			After the code runs, the value of echoing $result will be 6...
				Start with 0,
				2 is multiplied to 0, resulting in 0,
				1 is added to 0, resulting in 1,
				-5 is converted to 5 and added to 1, resulting in 6,
				No calculation is performed for "bob",
				The final result is echoed

		*/

	

		$testArray = [2, 1, -5, "bob"];		

		// create a variable to store the value of 0

		$result = 0;

		// foreach through each element in the array

		foreach($testArray as $element) {
			// Inside loop, if the element is_numeric...

			if (is_numeric($element)) {
				// have another if block to check to convert negative numbers to positive
				if ($element < 0) {
					$element *= -1;
				}
				
				// have another if/else that if the result is even multiply it to the result
				if ($element % 2 == 0) {
					$result *= $element;
				} else { // else, add the number to the result
					$result += $element;
				}
			
			}

		} // end of loop


		echo $result; // echo the result




?>




