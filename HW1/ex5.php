<?php

$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => 2015
];

$toyota = [
    "model" => "Camry",
    "speed" => 150,
    "door" => 4,
    "year" => 2014
];

$opel = [
    "model" => "Astra",
    "speed" => 140,
    "door" => 3,
    "year" => 2013
];

$cars = [
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel
];

#echo '<pre>';
#var_dump($cars);

foreach ($cars as $key => $value) {
    echo "CAR $key<br>", implode(' ', $value);
    echo "<br>";
}
