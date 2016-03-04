<?php


function arraySearch() {

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$continuous = 1;
$query = '';

  
  do {
    fwrite(STDOUT, "Enter a name to search\n");
    $query = fgets(STDIN);
    $query = trim($query);
      echo "\n";
    
    $result = array_search($query, $names);
    if ($result !== false) {
        echo "$names[$result] was found\n";
        echo "Hit enter to search for another name\n";
        fgets(STDIN);
        echo "\n";
    } else {
      echo "Name Not Found\n";
      echo "Try searching again\n\n";
    }
    $comparison = array_intersect($names, $compare);
    foreach ($comparison as $match) {
      echo ($match);
      echo "\n";
    }

    echo "\n";

    $difference = array_diff($names, $compare);
    foreach ($difference as $diff) {
      echo ($diff);
      echo "\n";
    }
  } while ($continuous = 1);

}



arraySearch();
?>