<?php 
require_once('square.php');

$test1 = new Rectangle(10,5);
echo "The area is: " . $test1->area() .PHP_EOL;
echo "The perimeter: " . $test1->perimeter() .PHP_EOL;
$test2 = new Square(9);
echo "The perimeter is: " . $test2->perimeter() . PHP_EOL;
echo "The area is: " .$test2->area() .PHP_EOL;

 ?>