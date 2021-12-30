<?php 
// pengecekan di akhir, eksekusi minimal 1 kali
$counter = 100;
do{
    echo "Ini adalah for while ke -$counter". PHP_EOL;
    $counter++;
}while($counter <= 10);

// syntak alternatif
// $counter = 1;
// while($counter <= 10):
//     echo "Ini adalah for while ke -$counter". PHP_EOL;
//     $counter++;
// endwhile;