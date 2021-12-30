<?php 
$names =["Riza","Billy","Eky"];
var_dump($names);

// Mengubah Data Array
$names[1]= "Arif";
var_dump($names);

// menghapus array dengan unset
unset($names[1]);
// index 1 hilang
var_dump($names);

// menambahkan data array
$names[] = "Jaki";

// menghitung jumlah data array
var_dump($names);
var_dump(count($names));

// Contoh MAP / ARRAY dengan menggunakan index yang bukan number
$riza = array(
    "id" => "Riza",
    "name" => "Riza Agustin",
    "Age" => 27,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
        )
);
echo "\n";
var_dump($riza["id"]);
var_dump($riza["address"]["city"]);
// PAKAI KURUNG KOTAK JUGA BISA

$eki = [
    "id" => "Eki",
    "name" => "Eki Kurniawan",
    "age" => 25,
    "address" => [
        "city" => "Bandung",
        "country" => "Malaysia"
    ]

];
var_dump($eki['id']);
var_dump($eki["address"]["city"]);