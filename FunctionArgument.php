<?php
function sayHello($name)
{
    echo "Hello $name". PHP_EOL;
}

sayHello("Riza");
sayHello("Budi");

// default parameter
function sayHello2($name="Anonymus")
{
    echo "Hello $name". PHP_EOL;
}

sayHello2();
sayHello2("Budi");


// type declaration
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total". PHP_EOL;
}

sum(100,100);
sum("100","100");
sum(true,false);
// sum([],[]);