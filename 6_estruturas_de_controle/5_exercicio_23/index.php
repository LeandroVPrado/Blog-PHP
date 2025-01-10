<?php 

/* 
    Exercício 23
    Complemente o exercício 22;
    Insira um else com uma mensagem para as pessoas que são menores de idade;
*/

$a = 17;
$b = 18;    
$c = 21;
$maioridade = 18;

$msg1 = "Pessoa maior de idade <br>";
$msg2 = "Pessoa menor de idade <br>";


if($a >= $maioridade) {
    echo "<1 - >";
    echo $msg1;
} else {
    echo "<1 - >";
    echo $msg2;
}

if($b >= $maioridade) { 
    echo "<2 - >";
    echo $msg1;
} else {
    echo "<2 - >";
    echo $msg2;
}

if($c >= $maioridade) {
    echo "<3 - >";
    echo $msg1;
} else {
    echo "<3 - >";
    echo $msg2;
}