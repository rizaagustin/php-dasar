<?php
$name = "Riza"; //global vaiabel scope

function sayHello($name){
    echo $name. PHP_EOL;
}

sayHello($name);

function createName(){
    // $name = "Eko"; // local scope
    global $name; // bisa dipakai untuk mengakses variabel diluar function
    echo $name;
}
createName();