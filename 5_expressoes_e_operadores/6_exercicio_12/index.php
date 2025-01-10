<?php 

// Exercício 12 - Operações básicas de matemática.

$soma = 12 + 148;
echo "Soma: $soma" . "<br>";
$multiplicacao = 123 * 43259;       
echo "Multiplicação: $multiplicacao" . "<br>";
$divisao = 78 / 14756;  
echo "Divisão: $divisao" . "<br>";
$subtracao = 0.123 - 0.00345678951; 
echo "Subtração: $subtracao" . "<br>";

$op = $soma / $subtracao * ($multiplicacao - $divisao) / $subtracao;    
echo "Operação: $op" . "<br>";
