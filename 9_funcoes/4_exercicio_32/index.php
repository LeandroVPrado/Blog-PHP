<?php
/*
Exercício 32
Crie uma função;
Define três variáveis numéricas dentrro dela;
Exiba a multiplicação destes números com um echo;
*/

// Invocação
function mult() {
    $x = 5;
    $y = 4.12;
    $z = 8;

    $resultado = $x * $y * $z;

    echo $resultado . "<br>";
}

// Resultado
mult();