<?php
  $things = array('Sgt. Pepper', "11", null, $numbers = array(1,2,3), 3.14, "12 + 7", false, (string) 11);
  echo "\n";
  foreach ($things as $thing) {
    if (is_scalar($thing) == true) {
      if (is_numeric($thing) == true) {
        if (is_float($thing) == true) {
          echo "$thing has a type of float\n";
        } else {
          echo "$thing has a type of integer\n";
        }
      } else if (is_string($thing) == true) {
          echo "$thing has a type of string\n";
      } else if (is_bool($thing) == true) {
          echo "$thing\vfalse has a type of boolean\n";
      }
    } else if (is_array($thing) == true) {
        foreach($numbers as $number) {
          echo "\$number has a value of $number\n";
        }
        echo "$thing has a type of array\n";
    } else if (is_null($thing) == true) {
        echo "$thing\vnull has a type of null\n";
    }
  };
?>