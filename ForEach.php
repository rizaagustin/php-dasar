<?php 
// kode tanpa foreach
$names = ["Riza","Billy","Eki"];
for ($i=0; $i < count($names); $i++) { 
    echo "Data ke $i = $names[$i]". PHP_EOL; 
}

foreach ($names as $name) {
    echo "Hello $name". PHP_EOL; 
}

// kode foreach dengan key
$person = [
    "first_name" => "Riza",
    "middle_name" => "Agustin",
    "last_name" => "Aaa"
];

foreach ($person as $key => $value) {
    echo "$key : $value". PHP_EOL; 
}