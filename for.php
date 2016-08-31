<?php  
fwrite(STDOUT, "Enter a starting number: ".PHP_EOL);
$a = trim(fgets(STDIN));
fwrite(STDOUT, "Enter an ending number: ".PHP_EOL);
$b = trim(fgets(STDIN));
fwrite(STDOUT, "Enter an increment amount: ".PHP_EOL);
$i = trim(fgets(STDIN));

$numbersAreValid = is_numeric($a) && is_numeric($b) && is_numeric($i);

echo PHP_EOL;

for($a = $a; $a <= $b; $a += $i) {
  fwrite(STDOUT, $a .PHP_EOL);
}
 if ($numbersAreValid === false) {
    echo "Please enter a valid number" .PHP_EOL;
 }

echo PHP_EOL;