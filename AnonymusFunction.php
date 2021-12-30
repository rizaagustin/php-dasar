<?php
// anonymus Function ATAU closure
$sayHello = function (string $name){
    echo "Hello $name". PHP_EOL;
};

$sayHello("Riza");
$sayHello("Agustin");


function sayGoodBye(string $name,$filter){
    $finalName = $filter($name);
    echo "Good Bye $finalName". PHP_EOL;
}

$filterFunction = function(string $name):string{
    return strtoupper($name);
};
sayGoodBye("Riza",$filterFunction);

// mengakses variabel luar pada anonymus function menggunakan use
$firstName="Riza";
$lastName="Agustin";
$sayHelloRiza = function () use ($firstName,$lastName){
    echo "Hello $firstName $lastName". PHP_EOL; 
};

$sayHelloRiza();
