<?php 

/*
Exercício 34
Crie uma função que verifica se um número é par ou ímpar;
Se for par imprima uma mensagem;
Se for ímpar imprima uma mensagem;
*/

function verificarParImpar($num) {
    if($num % 2 == 0) {
        echo "O número $num é par! <br>";
    } else {
        echo "O número $num é ímpar! <br>";
    }
}

verificarParImpar(8);
verificarParImpar(9);