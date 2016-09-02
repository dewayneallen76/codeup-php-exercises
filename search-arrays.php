<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
// Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names.
function searchArray($a, $b) {
	$result = array_search($a,$b);
	if(is_int($result)) {
		echo "TRUE".PHP_EOL; 
	}
	if(is_bool($result)) {
		echo "FALSE".PHP_EOL;
	}
}
searchArray('Tina', $names);
searchArray('Bob', $names);

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().

// function compareArrays($array1, $array2) {
// 	$count = 0;
// 	foreach ($array1 as $value) {
// 		if (searchArray($array2, $value)) {
// 			$count += 1;
// 		}
// 	}
// 	return $count;
// }
// var_dump(compareArrays($names, $compare));


$result = array_intersect($names, $compare); 
print_r($result);

