<?php

$handle = fopen('data/cities.txt', 'a');

$newCities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];


foreach ($newCities as $cityAndState) {
    fwrite($handle, $cityAndState . PHP_EOL);
}

fclose($handle);