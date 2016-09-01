<?php
// Create variables $a and $b at the top of your script and give them different values. Watch what happens (or, does not happen) to your function output as you set and modify $a & $b outside of your functions. Think carefully about how this behavior differs from the way JavaScript handles variables.
$a = 5;
$b = 10;
// function to add two values
function add($a = 0, $b = 0) {
	if(is_numeric($a) && is_numeric($b)) {
		return $a + $b;
	} else {
		echo "ERROR: You must enter a number." .PHP_EOL;
	}  
}
// function to subtract two values
function subtract($a = 0, $b = 0) {
	if(is_numeric($a) && is_numeric($b)) {
		return $a - $b;
	} else {
		echo "ERROR: You must enter a number." .PHP_EOL;
	}  
}
// function to multiply two values
function multiply($a = 0, $b = 0) {
	if(is_numeric($a) && is_numeric($b)) {
		return $a * $b;
	} else {
		echo "ERROR: You must enter a number." .PHP_EOL;
	}  
}
// function to divide two values
function divide($a = 0, $b = 0) {
	if($a == 0 or $b ==0) {
		echo "ERROR: You cannot divide by zero." .PHP_EOL;
	} else {
		return $a / $b;
	}
}
// function to get the modulus of two values 
function modulus($a = 0, $b = 0) {
	if(is_numeric($a) && is_numeric($b)) {
		return $a % $b;
	} else {
		echo "ERROR: You must enter a number." .PHP_EOL;
	}	
}


// Add code to test your functions here
echo add('cat','dog').PHP_EOL;
echo subtract('cat',$b).PHP_EOL;
echo multiply($a,'dog').PHP_EOL;
echo divide($a,0).PHP_EOL;