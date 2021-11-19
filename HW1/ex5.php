<?php

$bmw = array(
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015"
);

$toyota = array(
    "model" => "Camry",
    "speed" => 150,
    "door" => 4,
    "year" => "2014"
);

$opel = array(
    "model" => "Astra",
    "speed" => 140,
    "door" => 3,
    "year" => "2013"
);

$cars = array(
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel
);

#echo '<pre>';
#var_dump($cars);

foreach ($cars as $key => $value) {
    echo "CAR $key<br>";
    echo implode(' ', $value);
    //foreach ($value as $item) {
    //    print("$item "); //TODO
    //}
    echo "<br>";
}
