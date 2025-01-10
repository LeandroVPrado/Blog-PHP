<?php

class Pessoa {
    function falar() {
        echo "Olá, eu sou um objeto! <br>";
    }

    function somar($x, $y) {
        echo $x + $y . "<br>";
    }
}

$leandro = new Pessoa();
$leandro->falar();

$joao = new Pessoa();
$joao->falar();

$leandro -> somar(2,2);
$joao -> somar(3,3);


