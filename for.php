<?php

fwrite(STDOUT, "Enter a number" . PHP_EOL);
$numberOne = fgets(STDIN);
fwrite(STDOUT, "Enter another number" . PHP_EOL);
$numberTwo = fgets(STDIN);


echo "\nNumber One: {$numberOne}Number Two: {$numberTwo}";

for ($i = (int)$numberOne; $i < (int)$numberTwo; $i++) {
	echo $i . PHP_EOL;
};