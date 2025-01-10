<?php

class Car {
    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca) {

        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }
}

$ferrari = new Car(4,"Vermelha","Ferrari");
echo "O carro tem $ferrari->portas portas, é da cor $ferrari->cor e da marca $ferrari->marca.";