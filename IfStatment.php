<?php 
$nilai=0;
$absen=90;

if($nilai>=80 && $absen>=80){
    echo "Nila Anda A". PHP_EOL;
}else if($nilai>=70 && $absen>=70){
    echo "Nila Anda B". PHP_EOL;
}else if($nilai>=60 && $absen>=60){
    echo "Nila Anda C". PHP_EOL;
}else if($nilai>=50 && $absen>=50){
    echo "Nila Anda D". PHP_EOL;
}else{
    echo "Nilai Anda E". PHP_EOL;
}

// Bisa juga penulisannya seperti ini
if($nilai>=80 && $absen>=80):
    echo "Nila Anda A". PHP_EOL;
elseif($nilai>=70 && $absen>=70):
    echo "Nila Anda B". PHP_EOL;
elseif($nilai>=60 && $absen>=60):
    echo "Nila Anda C". PHP_EOL;
elseif($nilai>=50 && $absen>=50):
    echo "Nila Anda D". PHP_EOL;
else:
    echo "Nilai Anda E". PHP_EOL;
endif;