<?php
  
   (int)$userNumOne = 0;
   (int)$userNumTwo = 0;
   (int)$userInterval = 0;

  fwrite(STDOUT, "\nPlease enter a number.\n");
  do {
    $userNumOne = fgets(STDIN);
    var_dump((int)$userNumOne);
    if (is_int((int)$userNumOne) == false) {
      fwrite(STDOUT, "You did not enter a valid number.\n");
      fwrite(STDOUT, "Enter a valid number.\n");
      $userNumOne = fgets(STDIN);
    }
  } while (is_int((int)$userNumOne) == false);

  fwrite(STDOUT, "\nPlease enter another number.\n");
  do {
    $userNumTwo = fgets(STDIN);
    var_dump((int)$userNumTwo);
    if (is_int((int)$userNumTwo) == false) {
      fwrite(STDOUT, "You did not enter a valid number.\n");
      fwrite(STDOUT, "Enter a valid number.\n");
      $userNumTwo = fgets(STDIN);
    }
  } while (is_int((int)$userNumTwo) == false);

  fwrite(STDOUT, "\nPlease enter an interval.\n");
  do {
    $userInterval = fgets(STDIN);
    var_dump((int)$userInterval);
    if (is_int((int)$userInterval) == false) {
      fwrite(STDOUT, "You did not enter a valid number.\n");
      fwrite(STDOUT, "Enter a valid number.\n");
      $userInterval = fgets(STDIN);
    }
  } while (is_int((int)$userInterval) == false);

  for ((int)$i = (int)$userNumOne; $i <= (int)$userNumTwo; (int)$i+=$userInterval) {
    echo "\$i has the value of {$i}\n";
  }
?>