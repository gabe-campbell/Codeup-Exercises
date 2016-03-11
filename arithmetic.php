<?php

$a;

$b;

function inputNumbers(&$a, &$b)
{
  echo "Please input an integer" . PHP_EOL;
  $a = fgets(STDIN);
  echo "Please input another number" . PHP_EOL;
  $b = fgets(STDIN);
}

function addNumbers($a, $b)
{
  echo $a + $b;
  echo PHP_EOL;
}

function subtractNumbers($a, $b)
{
  echo $a - $b;
  echo PHP_EOL;
}

function multiplyNumbers($a, $b)
{
  echo $a * $b;
  echo PHP_EOL;
}

function divideNumbers($a, $b)
{
  echo $a / $b;
  echo PHP_EOL;
}

function modulusNumbers($a, $b)
{
  echo $a % $b;
  echo PHP_EOL;
}

inputNumbers($a, $b);
addNumbers($a, $b);
subtractNumbers($a, $b);
multiplyNumbers($a, $b);
divideNumbers($a, $b);
modulusNumbers($a, $b);