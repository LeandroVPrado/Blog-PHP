<?php 

/**
 * Exercício 42
 * Na frase "Cadê o meu queijo? Ele estava aqui em cima"
 * Resgate apenas a palavra queijo;
 */

 $frase = "Cadê o meu queijo? Ele estava aqui em cima";
echo $frase . "<br>";
 $queijo = substr($frase,12,6);
 echo $queijo ."<br>";
 $estava = substr($frase,24,6);
 echo $estava ."<br>";
 $estava2 = substr($frase, 24, -13);
 echo $estava2 ."<br>";