<?php

/* 
    Exercício 24b
    Crie uma variável que receba um peso;
    Caso seja maior que 80, imprima a mensagem que está pesado demais;
    Se não, imprima "Peso dentro do limite";
*/

$peso1 = 80;
$peso2 = 75;
$peso3 = 85;
$pesoLimite = 80;

$msg1 = "Pesado demais! <br>";
$msg2 = "Peso dentro do limite! <br>";

if($peso1 > $pesoLimite){
    echo "<1 - >";
    echo $msg1;
} else {
    echo "<1 - >";
    echo $msg2;
}

if($peso2 > $pesoLimite) {
    echo "<2 - >";
    echo $msg1;
} else {
    echo "<2 - >";
    echo $msg2;
}

if($peso3 > $pesoLimite) {
    echo "<3 - >";   
    echo $msg1;
} else {
    echo "<3 - >";
    echo $msg2;
}