<?php
include "functions.php";

task1([1,2,3], false);

$res = task2('-', 1, 2, 3, 5);

echo $res;

echo task3(6, 5);


date_default_timezone_set('Europe/Moscow');
echo date('d.m.Y H:i'), '<br>';
echo strtotime('24.02.2016 00:00:00'), '<br>';
echo date('Y-m-d H:i:s', 1456261200), '<br>';



$string = 'Карл у Клары украл Кораллы';
echo str_replace('К', '', $string), '<br>';

$string = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $string), '<br>';

file_put_contents('test.txt', 'Hello again!');
my_file_get_contents('test.txt');

