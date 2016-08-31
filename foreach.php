<?php 


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $value) {
	if (is_numeric($value)){
		echo "{$value} is a number".PHP_EOL;
	} else if (is_string($value)) {
		echo "{$value} is a string".PHP_EOL;
	} else if (is_array($value)) {
	 	foreach ($value as $value) {
	 		echo $value . "is an array".PHP_EOL;
	 	}
	} else if (is_bool($value)) {
	 	echo "$value is a boolean".PHP_EOL;
	}
}
