<?php

echo "Texto 1 de teste aspas duplas <br>";
echo "Texto 2 de 'teste aspas simples dentro de aspas duplas' <br>";
echo 'texto 3 de teste aspas simples';

$t = "teste";
// Teste 4 - Não será possível pois o PHP não deixa chamar uma variável dentro de uma string com aspas simples. 
echo 'texto 4 de $t chamando variável dentro de aspas simples <br>'; 
// Teste 5 - Será possível pois o PHO deixa chamar uma variável entro de um string com aspas duplas.
echo "texto 5 de $t chamando variável dentro de aspas duplas <br>";