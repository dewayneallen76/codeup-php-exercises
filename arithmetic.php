<?php
// Create variables $a and $b at the top of your script and give them different values. Watch what happens (or, does not happen) to your function output as you set and modify $a & $b outside of your functions. Think carefully about how this behavior differs from the way JavaScript handles variables.
$a = 5;
$b = 10;
// function to add two values
function add($a, $b)
{
    return $a + $b;
}
// function to subtract two values
function subtract($a, $b)
{
    return $a - $b;
}
// function to multiply two values
function multiply($a, $b)
{
    return $a * $b;
}
// function to divide two values
function divide($a, $b)
{
    return $a / $b;
}
// function to get the modulus of two values 
function modulus($a, $b) {
	return $a % $b;
}


// Add code to test your functions here
echo add($a,$b).PHP_EOL;
echo subtract($a,$b).PHP_EOL;
echo multiply($a,$b).PHP_EOL;
echo divide($a,$b).PHP_EOL;