<?php 

/**
 * Exercício 56 
 * 
 * Crie uma classe Humano com algumas propriedades e o método falar;
 * Crie ima outra classe Professor que herda de humano, crie também as propriedades e métodos particulares desta classe;
 * Exiba os valores das propriedades da classe pai e também utilize os métodos;
 */

 class Humano {
    public $olhos = 2;
    public $boca = 1;
    public $nariz = 1;

    public function falar() {
        echo "Oi, tudo bem? <br>";
    }
 }

 class Professor extends Humano {
    public $formacao = "Mestre";

    public function darAula() {
        echo "O professor tem a formação de $this->formacao <br>";
 }
}

 $marcos = new Humano;
 echo "$marcos->olhos <br>";
 $marcos->falar();

 $joao = new Professor;
 echo "$joao->olhos <br>";
 echo "$joao->boca <br>";
 echo "$joao->nariz <br>";
 $joao->falar();
 $joao->darAula();
 
