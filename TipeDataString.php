<?php 
echo 'Name : ';
echo 'Riza Agustin';
echo "\n";

echo "Name : ";
echo "Riza\t Agustin \t Str.Kom";
echo "\n";

echo <<<riza
Selamat Datang Riza Agustin
Sekarang Kita Belajar Tipe Data 
Bisa Menggunakan Heredoc

riza;

echo <<<'riza'
Selamat Datang Riza Agustin
Sekarang Kita Belajar Tipe Data 
Bisa Menggunakan nowdoc
riza;
