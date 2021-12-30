<?php 

$name = "Riza";
$name = null;
$age = null;

echo "Name: ";
echo $name;
echo "\n";

echo "Age: ";
echo $age;
echo "\n";

// mengecek variabel itu null atau Bukan
// is_null 1 = true, 0 = false
echo var_dump(is_null($name));
echo "\n";
// juga bisa menggunakan isset untuk mengecek varibel itu ada atau null
$a = '1';
echo "Isset: ";
echo var_dump(isset($a));
echo "\n";

$b = null;
echo "Isset: ";
echo var_dump(isset($b));
echo "\n";


$contoh = "Riza";
unset($contoh); //Menghapus variabel contoh
echo $contoh;