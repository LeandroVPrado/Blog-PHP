<?php

/**
 * Exercício 49
 * Crie variáveis com características de algum objeto ou animal;
 * Depois crie um array com compact com estas mesmas variáveis;
 * Faça um loop no array e imprima os valores
 */

 $grupo = "mamífero";
 $tipo = "bípede";
 $raca = "humano";

 $arr = compact("grupo", "tipo", "raca");
 print_r($arr);
 echo "<br>";

foreach ($arr as $caracteristicas => $value) {
    echo "$caracteristicas: $value <br>";
}

