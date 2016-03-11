<?php

//read in the states.csv file
//write an array of associative arrays where each state's abbreviation as a
//output should look like 
//$states = {
//   [AL => Alabamba],
//   etc...
// };

//set file name
$filename = 'states.csv';

//open file, 'r' means for reading only
$handle = fopen($filename, 'r');

//read contents from handle to the end of the file
//contents come in as a single string
$contentString = fread($handle, filesize($filename));

//need to close the file
fclose($handle);

//convert the single string into an array of strings
$arrayOfStrings = explode(PHP_EOL, $contentString);

$arrayOfStates = [];

foreach ($arrayOfStrings as $string) {
  $stateAssociativeArray = [];

  $stateInfo = explode(", ", $string);

  $abbreviation = $stateInfo[0];
  $stateName = $stateInfo[1];

  $stateAssociativeArray[$abbreviation] = $stateName;

  $arrayOfStates[] = $stateAssociativeArray;
}

  print_r($stateAssociativeArray);