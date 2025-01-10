<?php

class Humano {
    public $idade = 29;

    public function falar() {
        echo "Olá Mundo! <br>";
    }

    private function gritar() {
        echo "PHP É MUITO BOM! <br>";
    }

    public function acessarGritar() {
        $this->gritar();
    }

    protected function falarBaixinho() {
        echo "lalalala <br>";
    }

    public function acessarFalarBaixinho() {
        $this->falarBaixinho();
    }
}

class Programador extends Humano {
    public function acessarFalarBaixinhoProgramador() {
        $this->falarBaixinho();
    }
}

$ze = new Humano();
$ze->falar() . "<br>";
$ze->acessarGritar() ."<br>";
$ze->acessarFalarBaixinho() ."<br>";

$leandro = new Programador();
echo $leandro->idade . "<br>";
$leandro->falar() ."<br>";
$leandro->acessarGritar() ."<br>";
$leandro->acessarFalarBaixinho();
$leadro->acessarFalarBaixinhoProgramador() ."<br>";



