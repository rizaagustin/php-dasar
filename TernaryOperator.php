<?php
// Bukan Ternary Operator
$gender = "PRIA";
$hi=null;
if($gender == "PRIA"){
    $hi = "Hi Bro!";
}else{
    $hi = "Hi Nona!";
}

echo $hi. PHP_EOL;

// Ternary Operator
$hi = $gender == "PRIA1" ? "Hi Bro!" : "Hi Nona!";
echo $hi. PHP_EOL;