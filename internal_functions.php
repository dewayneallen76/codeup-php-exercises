<?php

// TODO: Create your inspect() function here

function inspect($a) {
	echo gettype($a) .PHP_EOL;
	echo ($a) .PHP_EOL; 
	if (is_array($a)) return "array"; 
}
    


// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;
inspect($num1) .PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;
inspect($num2) .PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;
inspect($num3) .PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;
inspect($num4) .PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;
inspect($null) .PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;
inspect($bool1) .PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;
inspect($bool2) .PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;
inspect($string1) .PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;
inspect($string2) .PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;
inspect($array1) .PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
inspect($array2) .PHP_EOL;