<?php

function increment(){
    static $counter = 1; //static scope
    echo "Counter = $counter". PHP_EOL;
    $counter++;
}
// static scope $counter = 1 varibel yang menampung data dari function yang di panggil sebelumnya
increment();
increment();
increment();