<?php 

/**
 * Exercício 46 
 * Crie um arry multidimensional com 3 arrays que tem 4 elementos cada;
 * Imprima todos os elementos de cada um dos arrays;
 * Imprima também quando está mundando de array;
 */

 $arr = [
    [1,2,3,4],
    [4,5,6,7],
    [9,8,7,6]
 ];

 // loop no array externo
 for ($i = 0; $i < count($arr); $i++) {
    // imprimindo array
    echo "Imprimindo o array externo: " . ($i + 1) . "<br>";

    //imprimindo o array interno
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . "<br>";
    }
 }

