<?php

// $data = array(42, 'bacon', (6 * 3), 'The Big Bang Theory', 98.6);
// foreach ($data as $datum) {
//     if (is_numeric($datum)) {
//         echo "{$datum} is a number\n";
//     } else if (is_string($datum)) {
//         echo "{$datum} is a string\n";
//     }
// }

// $array = array(1,2,3);

// $things = array('Sgt. Pepper', "11", null, $array, 3.14, "12 + 7", false, (string) 11);

// foreach($things as $thing) {
// 	if (is_string($thing)) {
// 		echo $thing . PHP_EOL;
// 	} elseif (is_null($thing)) {
// 		echo PHP_EOL;
// 	} elseif (is_array($thing)) {
// 		echo "Array (";
// 		foreach($array as $index) {
// 			echo $index;
// 		}
// 		echo ")" . PHP_EOL;
// 	} elseif (is_numeric($thing)) {
// 		echo $thing . PHP_EOL;
// 	} elseif (is_bool($thing)) {
// 		echo PHP_EOL;
// 	} elseif (is_int($thing)) {
// 		echo $i . PHP_EOL;
// 	}
// }
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $thing) {
	if (is_scalar($thing)) {
		echo $thing . PHP_EOL;
	}
}