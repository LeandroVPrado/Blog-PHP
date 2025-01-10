<?php

/* Exercício 7 - Criar um array associativo com características de uma pessoa;
    Desafio: Faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja;
*/

$arrAssoc = [
    'nome' => 'Leandro',
    'gênero' => 'Masculino',
    'altura' => 1.72,
    'idade' => 37,
];
$idade = $arrAssoc['idade'];
$nome = $arrAssoc['nome'];
echo "<br>";

if ($idade >= 18) {
    echo "A pessoa com nome: $nome tem a idade de $idade anos, portanto é maior de idade.";
}
