<?php

$leandro = [
    "nome"=> "Leandro",
    "idade"=> 37,
    "profissao"=> "Programador"
];

$alexia = [
    "nome"=> "Alexia",
    "idade"=> 33,
    "profissao"=> "Esteticista"
];

foreach ($leandro as $caract => $value) {
    echo "$caract => $value <br>";
}

foreach ($alexia as $caract => $value) {
    echo "$caract => $value <br>";
}