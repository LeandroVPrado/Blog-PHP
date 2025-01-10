<?php

/*
    Exercício 26
    Crie uma variável que receba uma velocidade de um carro;
    Depois crie uma estrutura if que verifica essa velocidade;
    Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;
    Se igual a 40, imprima uma mesnsagem para o motorista tomar cuidado;
    Se for maior que, imprima uma mensagem de multa; 
*/

$velocidade = 41;
$msg1 = "Velocidade Correta, prossiga!";
$msg2 = "Velocidade limite, Cuidado!";
$msg3 = "Velocidade excedida, Multa!";

if($velocidade < 40) {
    echo $msg1; 
} else if($velocidade == 40) {
    echo $msg2;
} else {
    echo $msg3;
}