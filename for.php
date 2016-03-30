<?php

fwrite(STDOUT, "Enter a number" . PHP_EOL);
$numberOne = fgets(STDIN);
fwrite(STDOUT, "Enter another number" . PHP_EOL);
$numberTwo = fgets(STDIN);
fwrite(STDOUT, "Enter a number to increment by" . PHP_EOL);
$increment = fgets(STDIN);

echo "\nNumber One: {$numberOne}Number Two: {$numberTwo}";

for ($i = (int)$numberOne; $i < (int)$numberTwo; $i+=$increment) {
	echo $i . PHP_EOL;
};