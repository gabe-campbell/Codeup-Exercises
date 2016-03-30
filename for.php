<?php

fwrite(STDOUT, "Enter a number" . PHP_EOL);
$numberOne = fgets(STDIN);
fwrite(STDOUT, "Enter another number" . PHP_EOL);
$numberTwo = fgets(STDIN);
fwrite(STDOUT, "Enter a number to increment by" . PHP_EOL);
$increment = fgets(STDIN);

echo PHP_EOL;

if (is_numeric((int)$numberOne) || is_numeric((int)$numberTwo) || is_numeric((int)$increment)) {

	if (!is_null($increment) && $increment != 0) {
		for ($i = (int)$numberOne; $i <= (int)$numberTwo; $i+=(int)$increment) {
			echo $i . PHP_EOL;
		}
	} else {
		for ($i = (int)$numberOne; $i <= (int)$numberTwo; $i++) {
			echo $i . PHP_EOL;
		}
	}
}