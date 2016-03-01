<?php
  echo "\nLoop One:\n";
  for ($i = 1; $i <= 100; $i++) {
    if($i % 2 == 1) {
      continue;
    }
    echo "$i\n";
  };
  echo "\nLoop Two:\n";
  for($i = 1; $i <= 100; $i++) {
    echo "$i\n";
    if ($i == 10) {
      break;
    }
  }
?>