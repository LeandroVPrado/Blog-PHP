<?php 
/**
 * Exercício 55 
 * Crie uma classe Carro;
 * Crie algumas propriedades e também a propriedade velocidade_maxima;
 * Crie o método setVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro;
 * e também o getVelocidadeMaxima onde é possível imprimir a velocidade do carro;
 */

 class Carro {
    public $velocidade_maxima;
    public $marca;

    function setVelocidadeMaxima($vel) {
        $this->velocidade_maxima = $vel;
    }

    function getVelovidadeMaxima() {
        echo "A velocidade máxima deste carro é: $this->velocidade_maxima Km/h <br>";
    }
 }

 $punto = new Carro;
 $punto->marca = "Fiat";

 $punto->setVelocidadeMaxima(220);
 $punto->getVelovidadeMaxima() ;
 