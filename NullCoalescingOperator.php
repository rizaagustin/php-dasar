<?php
// tanpa coalescing operator

// $data = [
//     'action' => 'create'
// ];

$data = [];

if(isset($data['action'])){
    $action = $data['action'];
}else{
    $action = 'nothing';
}

echo $action . PHP_EOL;

// coalescing operator
$data = [];
$action = $data['action'] ?? 'nothing';
echo $action .PHP_EOL;
