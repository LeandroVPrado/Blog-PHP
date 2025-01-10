<?php 

/* Exercício 14 - Crie uma variável saudação, nome e outra de sobrenome;
    Imprima com echo a concatenação de saudação, nome e sobrenome;
*/ 

$saudacao = "Caro senhor(a)";
$nome = "Leandro";
$sobreNome = "Prado";

$frase = $saudacao . " " . $nome . " " . $sobreNome . " pedimos encarecidamente que responda nossa enquete.";
echo $frase;