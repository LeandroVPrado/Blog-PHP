<?php 

/**
 * Exercício 43
 * Converta a seguinte string para array:
 * carro - navio - helicóptero - barco - jangada
 */

 $frase = "carro - navio - helicóptero - barco - jangada";

 $fraseArray = explode("-", $frase);
 print_r($fraseArray);
 echo "<br>";
 for ($i = 0; $i < count($fraseArray); $i++) {
    print_r("$fraseArray[$i] <br>");
 }