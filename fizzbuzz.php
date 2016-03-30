<?php

$fizz = 3;
$buzz = 5;
$fizzbuzz = 15;

for($i = 0; $i <= 100; $i++) {
	if ($i == $fizzbuzz) {
		echo "FizzBuzz" . PHP_EOL;
		$fizzbuzz += 15;
		$fizz += 3;
		$buzz += 5;
	} else if ($i == $fizz) {
		echo "Fizz" . PHP_EOL;
		$fizz += 3;
	} else if ($i ==$buzz) {
		echo "Buzz" . PHP_EOL;
		$buzz += 3;
	} else {
		echo $i . PHP_EOL;
	}
}