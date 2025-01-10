<?php

/**
 * Exercício 40
 * Percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop;
 * Imprima o número de letras "a" desta string;
 */

$str = "O rato roeu a roupa do rei de Roma";
$contadorDeAs = 0;

for ($i = 0; $i < strlen($str); $i++) {

    if ($str[$i] === "a") {
        $contadorDeAs++;
    }
}
echo "O número de A's na frase é de: $contadorDeAs";
