<?php

class Pessoa
{
    public $nome;
    function falar()
    {
        echo "Olá pessoal!";
    }
}

$leandro = new Pessoa();
$leandro->nome = "Leandro";
echo $leandro->nome;
echo "<br>";

$leandro->falar();