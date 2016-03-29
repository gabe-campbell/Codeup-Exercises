<?php

$a = 0;
$b = 0;

function inputNumbers(&$a, &$b) {
  fwrite(STDOUT, "Please input an integer\n");
  $a = trim(fgets(STDIN));
  fwrite(STDOUT, "Please input another number\n");
  $b = trim(fgets(STDIN));
  echo PHP_EOL;
  var_dump($a, $b);
}

function addNumbers($a, $b) {
  if (is_numeric($a) == true && is_numeric($b) == true) {
    echo $a + $b . PHP_EOL;
  } else {
    error();
  };

}

function subtractNumbers($a, $b) {
  if (is_numeric($a) == true && is_numeric($b) == true) {
    echo $a - $b . PHP_EOL;
  } else {
    error();
  }
}

function multiplyNumbers($a, $b) {
  if (is_numeric($a) == true && is_numeric($b) == true) {
    echo $a * $b . PHP_EOL;
  } else {
    error();
  }
}

function divideNumbers($a, $b) {
  if (is_numeric($a) == true && is_numeric($b) == true) {
    echo $a / $b . PHP_EOL;
  } else {
    error();
  }
}

function modulusNumbers($a, $b) {
  if (is_numeric($a) == true && is_numeric($b) == true) {
    echo $a % $b . PHP_EOL;
  } else {
    error();
  }
}

function callFunctions($a, $b) {
  inputNumbers($a, $b);
  addNumbers($a, $b);
  subtractNumbers($a, $b);
  multiplyNumbers($a, $b);
  divideNumbers($a, $b);
  modulusNumbers($a, $b);
}

function error() {
  echo "ERROR: Both arguments must be numbers\n";
}

callFunctions($a, $b);
?>