<?php 

/**
 * Exercício 47
 * Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, Teto solar, automático;
 * Chame este array de carro;
 * Crie variáveis com base neste array;
 */

$carro = ["Jaguar", 3.0, "azul", 18, "teto solar", "automático"];

print_r($carro);
echo "<br>";

list($marca, $motor, $cor, $roda, $tetoSolar, $transmissao) = $carro;

echo $marca . "<br>";
echo $motor . "<br>";
echo $cor . "<br>";
echo $roda . "<br>";
echo $tetoSolar . "<br>";
echo $transmissao. "<br>";

