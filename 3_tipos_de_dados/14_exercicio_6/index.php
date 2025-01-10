<?php
// Exercício 6 - demontrando arrays
$arr = [
    'Marca' => 'Fiat', 
    'Modelo' => 'Punto', 
    'Ano' => 2011,
    'Teto_solar' => true,
];
echo "<br>";
print_r($arr);
echo "<br>";
print_r($arr["Marca"]);
echo "<br>";
print_r($arr["Modelo"]);
echo "<br>";    
print_r($arr["Ano"]);
echo "<br>";

$marca = $arr["Marca"];
$modelo = $arr["Modelo"];

echo "<br>";

echo "O carro é da $marca e do modelo $modelo";