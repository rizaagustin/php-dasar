<?php
$nilai="Z";
switch($nilai){
    case "A":
        echo "Anda Lulus dengan sangat baik". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus". PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus". PHP_EOL;
        break;
    default:
        echo "Mungkin Anda Lelah". PHP_EOL;
}

// Penulisannya juga bisa tanpa kurung kurawa

switch($nilai):
    case "A":
        echo "Anda Lulus dengan sangat baik". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda Lulus". PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus". PHP_EOL;
        break;
    default:
        echo "Mungkin Anda Lelah". PHP_EOL;
endswitch;