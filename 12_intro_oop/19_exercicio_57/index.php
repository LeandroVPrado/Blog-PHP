<?php

class Cachorro
{
    public $raca;
    public $cor;
    public $nome;

    function __construct($raca, $cor, $nome)
    {
        $this->raca = $raca;
        $this->cor = $cor;
        $this->nome = $nome;
    } 

    public function exibirAnimal(){
        echo "O cachorro é da raça $this->raca , sua cor é $this->cor e seu nome é $this->nome.";
    }
}

$pitty = new Cachorro("vira-lata", "caramelo", "Pitty");
$pitty->exibirAnimal();
