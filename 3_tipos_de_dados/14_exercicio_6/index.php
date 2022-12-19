<?php

$carro1 = ['marca' => 'Toyota', 'modelo' => 'Supra', 'motor' => '2JZ'];

print_r($carro1);
echo "<br>";
echo $carro1 ['marca'];    
echo "<br>";
echo $carro1 ['modelo'];
echo "<br><br>";

$carro2 = [
    'marca' => 'Nissan',
    'modelo' => 'Skyline GTR R34',
    'motor' => 'RB26DETT'
];

print_r($carro2);
echo "<br>";
echo $carro2 ['marca'];
echo "<br>";
echo $carro2 ['modelo'];

?>