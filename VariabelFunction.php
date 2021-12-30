<?php

function foo(){
    echo "Foo". PHP_EOL;
}

function bar(){
    echo "Bar". PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName". PHP_EOL;
}

function sampleFunction(string $name):string{
    return "Sample $name";    
}

sayHello("Riza","sampleFunction");

// fuction bawaan strtoupper dan strtolower 
sayHello("Riza","strtoupper");
sayHello("Riza","strtolower");