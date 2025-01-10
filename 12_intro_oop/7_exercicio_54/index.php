<?php 

/**
 * Exercício 54 
 * Crie uma classe Pessoa;
 * Crie a propriedade nome e idade;
 * E também um método andar;
 */

 class Pessoa {
    public $nome;
    public $idade;

    function andar($m) {
        echo "A pessoa andou $m metros. <br>";
    }
 }

 $leandro = new Pessoa();
 $leandro->nome = "Leandro";
 $leandro->idade = 37;
 echo "O nome dele é $leandro->nome e a idade é $leandro->idade anos. <br>";
 $leandro->andar(5);

 $terry = new Pessoa();
 $terry->nome = "Terry";
 $terry->idade = 63;
 echo "O nome dele é $terry->nome e a idade é $terry->idade anos. <br>";
 $terry->andar(10);

