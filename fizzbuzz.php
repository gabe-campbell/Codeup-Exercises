<?php
  $fizz = 3;
  $buzz = 5;
  $fizzbuzz = 15;

  echo "\n";
  for ($i = 1; $i <= 100; $i+=1) {
    if ($i == $fizzbuzz) {
      echo "$i Fizzbuzz\n";
      $fizzbuzz += 15;
      $fizz += 3;
      $buzz += 5;
    } else if ($i == $fizz) {
      echo"$i Fizz\n";
      $fizz += 3;
    } else if ($i == $buzz) {
      echo"$i Buzz\n";
      $buzz += 5;
    } else {
      echo "$i\n";
    }
  }
?>