<?php 


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


foreach ($things as $thing) {
	echo "The type is " . gettype($thing) . ". The value is: ";
	if(is_array($thing)) {
		foreach($thing as $value) {
			echo $value . " ";
		}
	} else {
 		echo $thing;
 	}
 	echo PHP_EOL;
} 