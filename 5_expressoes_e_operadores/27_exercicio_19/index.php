<?php 

/*
    Converta os seguintes dados para int com o operador de cast;
    "testando"
    12.9
    true
    [1,2,3]
    E veja os resultados
*/


$a = (int) "testando";
echo $a;
echo "<br>";

$b = (int) 12.9;
echo $b;
echo "<br>";

$c = (int) true;
echo $c;    
echo "<br>";

$d = (int) [1,2,3];
echo $d;
echo "<br>";