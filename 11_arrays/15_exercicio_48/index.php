<?php

/**
 * Exercício 48 
 * Crie um array com os valores: batata, maçã, pero, feijão, arroz;
 * Remova pera e feijão
 */

 $arr = [
    'batata',
    'maçã',
    'pera',
    'feijão',
    'arroz'
 ];

 $removidos = array_splice($arr,2, 2);
 print_r($arr);
 echo "<br>";;

 print_r($removidos);
 echo "<br>";
