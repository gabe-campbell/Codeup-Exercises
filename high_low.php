<?php
$min = 1;
$max = 100;

do {
	$random = rand($min, $max);

	do {
		fwrite(STDOUT, "Guess? ");
		$guess = fgets(STDIN) . PHP_EOL;
		if ($guess == $random) {
			fwrite(STDOUT, "You Win! ") . PHP_EOL;
			fwrite(STDOUT, "Hit enter to play again") . PHP_EOL;
			fgets(STDIN);
		} elseif ($guess > $random) {
			fwrite(STDOUT, "Lower! " . PHP_EOL);
		} else if ($guess < $random) {
			fwrite(STDOUT, "Higher! " . PHP_EOL);
		} 
	} while ($guess != $random);
} while (1 == 1);
