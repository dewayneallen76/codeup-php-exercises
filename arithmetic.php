<?php
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
echo add(-5,-5).PHP_EOL;
echo subtract(100,10).PHP_EOL;
echo multiply(5,5).PHP_EOL;
echo divide(144,12).PHP_EOL;
echo modulus(3,3).PHP_EOL;