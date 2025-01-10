<?php 

/* Exercício 27 
Crie uma array com alguns valores(pelo menos 10) de tipos de dados diferentes;
Faça um loop while para exibir apenas os dados que são strings;
*/

$arr = [10, "Ana", 12.5, "e", true, "Leandro", [], "Amor", 22, "Eterno"];

$x = count($arr);
$y = 0;

while ($y < $x){
    if(is_string($arr[$y])){
        echo $arr[$y] . "<br>";
}

$y++;
}
