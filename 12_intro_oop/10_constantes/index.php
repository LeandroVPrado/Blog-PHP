<?php 

class Humano {
    public const OLHOS = 2;
    public const BRACOS =2;
    public const PERNAS = 2;

    function mostrarConstante() {
        echo self::OLHOS . "<br>";
    }
}

$leandro = new Humano();

echo $leandro:: OLHOS . "<br>";

$leandro->mostrarConstante();

