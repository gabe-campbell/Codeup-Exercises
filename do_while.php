<?php

// $test = 0;

// do {
// 	echo $test . PHP_EOL;
// 	$test++;
// } while ($test <= 100);

// $test = 100;

// do {
// 	echo $test . PHP_EOL;
// 	$test -= 5;
// } while ($test >= -10);

$test = 2;

do {
	echo $test . PHP_EOL;
	$test *= $test;
} while ($test < 1000000);
