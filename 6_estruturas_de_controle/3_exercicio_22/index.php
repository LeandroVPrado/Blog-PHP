<?php 

/*
    Exercício 22 

    Crie variáveis que recebam idades;
    Cheque se as idades são maiores ou iguais a 18;
    Se sim, imprima uma mensagem que a pessoa é maior de idade;
*/

$a = 17;
$b = 18;    
$c = 21;
$maioridade = 18;

$msg = "Pessoa maior de idade <br>";



if($a >= $maioridade) {
    echo "<1 - >";
    echo $msg;
}

if($b >= $maioridade) { 
    echo "<2 - >";
    echo $msg;
}

if($c >= $maioridade) {
    echo "<3 - >";
    echo $msg;
}
