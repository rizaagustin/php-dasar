<?php

$data = [1,2,3,5,6,6,6,4,32,12];
// error beda versi php
// $mapFunction = fn(int $value) => $value * 10;
// $dataResult = array_map($mapFunction,$data);
// var_dump($dataResult);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "firstName" => "Riza",
    "lastName" => "Agustin"
];

var_dump(array_keys($person));
var_dump(array_values($person));

