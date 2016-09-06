<?php

 // Converts array into list n1, n2, ..., and n3
function humanizedList($string, $sort = false) 
{
	$physicistsArray = explode(', ', $string);
	if ($sort == "sort") {
		sort($physicistsArray);
	}
	$last = array_pop($physicistsArray); 
	$string = implode(', ', $physicistsArray);
	return $string . ' and ' . $last;
}

 // List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

 // TODO: Convert the string into an array
$physicistsArray = [];

 // Humanize that list
$famousFakePhysicists = humanizedList($physicistsString);

 // Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.".PHP_EOL;

