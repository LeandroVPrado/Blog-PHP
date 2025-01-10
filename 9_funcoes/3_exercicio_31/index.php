<?php
/*
Exercício 31
Crie um array com strings;
Utilize a função implode no array;
Primeiro argumento: ","
Segundo argumento: o seu array
Atribua a invocação da função a uma variável
Exiba o resultado
*/

$arr = ["Leandro", "Ana Laura", "Dulce", "Neusa", "Jorge", "Moacir"];

$teste = implode(", ", $arr);
echo $teste;