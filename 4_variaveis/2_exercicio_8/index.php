<?php 

// Exercício 8 - Criação de 3 variáveis com tipos de dados diferentes.

$raça = "Archturiano";
$idade = 37;
$caracteristicas = ["humanóide", "inteligente", "agressivo", "conquistador"];
$alien = true;

if($alien){
    echo"O ser é da raça $raça, tem idade de $idade anos e características: <br>";
    echo"Seu padrão é: <br>";
    print_r($caracteristicas);
}