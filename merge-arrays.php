<?php 

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().

function combineArrays($array1, $array2) 
{	
	$merge = [];
	foreach($array1 as $index => $name) {
		array_push($merge, $name);
	if ($name != $array2[$index]) {
		array_push($merge, $array2[$index]);
	}
  }
	return $merge;
} 

print_r(combineArrays($names, $compare));

// to check if there is a larger array run this first to determine which array is larger.
// if(count($array1) >= count($array2)) {
// 	$largerArray = $array;
// 	$shortArray = $array2;
// } else {
// 	$largerArray = $array2;
// 	$shortArray = $array1;
// }