<?php 

function factorial(int $value){
    if ($value <= 0) {
        $result = 1;
    }
    $result =1;
    for ($i=$value; $i >= 1 ; $i--) { 
      $result *= $i;
    }

    return $result;
}
echo $result = factorial(5). PHP_EOL;
// Perulangan Bisa diganti dengan recursive

function factorialRecursive(int $value){
    if ($value <= 0) {
        return 1;
    }else{
        return $value * factorialRecursive($value - 1);
    }
}

echo $result = "Faktorial Recursive ".factorialRecursive(5). PHP_EOL;

// function factorialTailRecursive(int $total,int $value){
//     if ($value <= 0) {
//         return 12;
//     }else{
//         return factorialTailRecursive($total * $value, $value - 1);
//     }
// }

// echo $result = "Faktorial Tail Recursive ".factorialTailRecursive(1,5). PHP_EOL;