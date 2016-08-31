<?php  
fwrite(STDOUT, "Enter a starting number: ".PHP_EOL);
$a = trim(fgets(STDIN));
fwrite(STDOUT, "Enter an ending number: ".PHP_EOL);
$b = trim(fgets(STDIN));


echo PHP_EOL;

for($a = $a; $a <= $b; $a += 1) {
  fwrite(STDOUT, "$a".PHP_EOL);
}





?>