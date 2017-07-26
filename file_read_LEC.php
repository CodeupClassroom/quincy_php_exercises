<?php 

// Specify file name or path
$file = "eats.txt";

// Open a data stream and store a file pointer to that stream / resource object

	$handle = fopen($file, 'r');
	

/*
	"Streams are the way of generalizing file, network, data compression, and other operations which share a common set of functions and uses. In its simplest definition, a stream is a resource object which exhibits streamable behavior. That is, it can be read from, or written to, in a linear fashion..."

	- PHP Manual
*/


// Determine how many characters contained in the file
	// echo filesize($file);


// Read contents of file stream at the specified handle and up to the indicated size

	$contents = fread($handle, filesize($file));

	// echo $contents;


// ============ *** TASK *** Echo out all restaurants in all caps in alphabetical order 


// create a function to take in the file string and parse it for correct the output

	function parseFileToOrderedCaps($string)
	{
		$string = strtoupper($string);
		$contentsArr = explode("\n", $string);
		sort($contentsArr);
		foreach($contentsArr as $eat) {
			echo $eat . PHP_EOL;
		}
	}





// call file parser function
	
	parseFileToOrderedCaps($contents);


// Close file pointer to avoid security breaches and free the file up to be used by another program execution
	fclose($handle);


// File reading recap




