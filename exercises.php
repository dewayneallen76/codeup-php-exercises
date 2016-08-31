<?php 

// echo "\$argc is the number of arguments passed to a script".PHP_EOL;
// var_dump($argc);

// echo PHP_EOL;
// echo "\$argv is an array of all the arguments".PHP_EOL;
// var_dump($argv);

// if(isset($argv[1])){
// 	$firstArgument = $argv[1];
// } else {
// 	$firstArgument = "no value specified";
// }

// null coalescing
// ternary: same as the if loop above
// $firstArgument = (isset($argv[1])) ? $argv[1] : "no value specified";
// echo "The first argument is $firstArgument" .PHP_EOL;


// echo "The filename of the script is $argv[0]" .PHP_EOL;

// echo "The second user specified argument is $argv[2]" .PHP_EOL;
// echo "The first user specified argument is $argv[1]" .PHP_EOL;

$students = [
    ['name' => 'Virginia Potts', 'age' => 29],

    ['name' => 'Elon Musk', 'age' => 42],

    ['name' => 'Rasmus Lerdorf', 'age' => 45],

    ['name' => 'Marissa Mayer', 'age' => 38]
];

foreach ($students as $student) {
    foreach($student as $key => $value) {
    	echo "The student's $key is $value" . PHP_EOL;
    }
}
