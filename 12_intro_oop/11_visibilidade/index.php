<?php

class Car
{
    public $rodas = 4;
    private $vidro = "Sem película";

    protected $portas = 4;

    public function getVidro()
    {
        return $this->vidro;
    }

    public function getPortas()
    {
        return $this->portas;
    }
}

class Mecanico
{
    public function alterarRodas($carro)
    {
        $carro->rodas = 10;
    }

    public function colocarPeliculas($carro, $pelicula)
    {
        $carro->vidro = $pelicula;
    }
}


// $carro = new Car();

// echo $carro->rodas . "<br>";

// $leandro = new Mecanico();

// $leandro->alterarRodas($carro);
// echo $carro->rodas . "<br>";

// // Não pode alterar porque é privado
// // $leandro->colocarPeliculas($carro, "G20");

// //$carro->peliculaDeFabrica("G10");
// echo $carro->getVidro() . "<br>";

// //$carro->vidro = "Teste";

// echo $carro->getPortas() . "<br>";


