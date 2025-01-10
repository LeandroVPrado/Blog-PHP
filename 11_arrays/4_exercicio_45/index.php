<?php

/**
 * Exercício 45 
 * Crie um array com a função range de 10 a 45;
 * Imprima todos os números com uma soma de 6;
 * Se passar de 30 a soma, imprima também que o número é muito alto; 
 */

$arr = range(10, 45);
echo "<br>";

print_r($arr);
echo "<br>";

for ($i = 10; $i < count($arr); $i++) {
    $soma = $arr[$i] + 6;


    if ($soma > 30) {
        echo "Número $soma é muito alto <br>";
    } else {
        echo "$soma <br>";
    }
}

