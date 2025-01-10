<?php

/**
 * Exercício 53
 * Crie uma classe Cachorro;
 * Crie o método latir e andar;
 * Execute o método em novas instências da classe;
 */

 class Cachorro {
    function latir() {
        echo "O cachorro vai latir <br>";
    }

    function andar($m) {
        echo "O cahorro vai andar $m metros <br>";
    }
 }

//  $toto = new Cachorro();
//  $bile = new Cachorro();
 $toto->andar(5);
 $toto->latir();

 $bile->andar(8);
 $bile->latir();




