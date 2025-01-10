<?php 

/* 
    Exercício 24

    Crie algumas variáveis com tipos de dados diferentes: string, int e boolean, por exemplo;
    Cheque se a variável é um inteiro;
    Caso sim, apresente uma mensagem confirmando o tipo de dado;
    Caso não, paresente outra mensagem;
*/

$s = "Superman";
$i = 2025;
$b = true;

if(is_int($s)) {
    echo "A variável $s é um inteiro <br>";
} else {
    echo "A variável $s não é um inteiro <br>";
}

if(is_int($i)) {
    echo "A variável $i é um inteiro <br>";
} else {
    echo "A variável $i não é um inteiro <br>";
}

if(is_int($b)) {
    echo "A variável $b (true) é um inteiro <br>";
} else {
    echo "A variável $b (true) não é um inteiro <br>";
}
