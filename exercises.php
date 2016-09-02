<?php 

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(', ', $physicistsString);
var_dump($physicistsArray);
$physicistsString = implode(',', $physicistsArray);
echo $physicistsString;