<?php
$name = "Riza";
$otherName = &$name;
$otherName = "Budi";

echo $name. PHP_EOL;

function increment(int &$value){
    $value++;
}
$counter=1;
increment($counter);
echo $counter. PHP_EOL;