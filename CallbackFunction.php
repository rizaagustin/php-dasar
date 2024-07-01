<?php 
// callable = callback
function sayHello(string $name, callable $filter){
    $finalName= call_user_func($filter,$name);
        echo "Hello $finalName". PHP_EOL;
    
}

sayHello("Riza","strtoupper");
sayHello("Riza","strtolower");
sayHello("Riza",function(string $name):string{
    return strtoupper($name);
});

sayHello("Riza3","strtoupper");
