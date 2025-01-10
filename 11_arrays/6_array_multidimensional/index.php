<?php

$arr = [
    [1,2,3],
    [2,4,6]
];

print_r($arr);
echo "<br>";

echo $arr[0][1] . "<br>"; // Acessando o primeiro array e segundo elemento
echo $arr[1][2] . "<br>"; // Acessando o segundo array e terceiro elemento

echo count($arr) ."<br>"; // Count dos arrays dentro do array principal
echo count ($arr[0]) . "<br>"; //Count dos elementos do primeiro array dentro do array principal
