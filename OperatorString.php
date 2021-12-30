<?php 
$name = "Riza Agustin";

echo "Name :" .$name. PHP_EOL;
echo "Value :". 100 . PHP_EOL;

// konversi number ke string atau sebaliknya

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

//variabel parsing
$name = "Riza";
//tidak perlu titik tapi harus pakai petik 2
echo "Name : $name, Selamat Belajar PHP". PHP_EOL;

//curly braces
$var = "var";
echo "This is {$var}s".PHP_EOL;