<?php 

/* 
    Exercício 21 - 
    Faça as seguintes verificações em estruturas if:
    5 é maoir que 2?
    Matheus é diferente de Pedro
    12 é menor ou igual a 11
    Você deve inserir os valores em variáveis;    
*/

$a = 5 > 2;
$b = "Matheus" != "Pedro";
$c = 12 <= 11;

if($a) {
    echo "5 é maior que 2, portanto entrou no if 1 <br>";
}

if($b) {
    echo "Matheus é diferente de Pedro, portanto entrou no if 2 <br>";
}

if($c) {
    echo "12 não é menor nem igual a 11, portanto não entrou no if 3 <br>";
}

