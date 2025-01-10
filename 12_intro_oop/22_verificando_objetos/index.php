<?php

class Humano {
    public function falar() {
        echo "Olá";
}
}

$leandro = new Humano;
$teste = 10;

if(is_object($leandro)){
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

if(is_object($teste)){
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

echo get_class($leandro) . "<br>";

if(method_exists($leandro,"falar")){
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}

if(method_exists($leandro,"asd")){
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}
