<?php

$frase = "testando o case de uma palavra <br>";
$frase2 = "Testando o case de uma palavra <br>";
$frase3 = "testando o case de uma palavra <br>";

//Primeira letra em maíusculo
echo ucfirst($frase) ."<br>";
echo ucfirst($frase2) ."<br>";

// Todas as palavras com as iniciais em letras em maíusculas
echo ucwords($frase3) ."<br>";
echo ucwords($frase2) ."<br>";

