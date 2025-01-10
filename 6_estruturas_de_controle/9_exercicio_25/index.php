<?php

/*
    Exercício 25 
    Crie variáveis com números e outras com string;
    Faça um if checando se é um número;
    Caso for, atribua a multiplicação deste número por 2 em outra variável;
    E crie um outro if, que checa se o novo número é maior que 100;
    Se sim, iumprima uma mensagem;
*/

$num1 = 10;
$num2 = 2.25;
$num3 = 200;
$str1 = "Superman";
$str2 = "Batman";
$str3 = "Pinguim";

if (is_numeric($num1)) {
    echo ($num1) * 2 . "<br>";
    if (($num1) > 100) {
        echo "num1 possível <br>";
    } else {
        echo "num1 não é possível <br>";
    }
}

if (is_numeric($num2)) {
    echo ($num2) * 2 . "<br>";
    if (($num2) > 100) {
        echo "num2 possível <br>";
    } else {
        echo "num2 não é possível <br>";
    }
}

if (is_numeric($num3)) {
    echo ($num3) * 2 . "<br>";
    if (($num3) > 100) {
       echo "num3 possível <br>";
    } else {
        echo "num3 não é possível <br>";
    }
}

if (is_numeric($str1)) {
    echo ($str1) * 2 . "<br>";
    if (($str1) > 100) {
        echo "str1 possível <br>";
    }
} else {
    echo "str1 não é um número <br>";
}

if (is_numeric($str2)) {
    echo ($str2) * 2 . "<br>";
    if (($str2) > 100) {
        echo "str2 possível <br>";
    }
} else {
    echo "str2 não é um número <br>";
}

if (is_numeric($str3)) {
    echo ($str3) * 2 . "<br>";
    if (($str3) > 100) {
        echo "str3 possível <br>";
    }
} else {
    echo "str3 não é um número <br>";
}

