<?php 
//UNION ARRAY
$first = [
    "first_name" => "Riza"
];

$last = [
    "first_name" => "Eki",
    "last_name" => "Billy"
];
// apabila bentrok yg di dahulukan yg first
$full = $first + $last;
var_dump($full);