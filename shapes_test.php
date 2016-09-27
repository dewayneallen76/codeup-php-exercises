<?php 
require_once('rectangle.php');
require_once('square.php');

$test1 = new Rectangle(3,5);
echo $test1->area() .PHP_EOL;

$test2 = new Square(3,5);
echo $test2->perimeter() . PHP_EOL;

 ?>