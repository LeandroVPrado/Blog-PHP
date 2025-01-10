<?php 

/* Exercício 28
Crie um loop que vai até o número 30;
O contatdor deve iniciar como 4;
Faça incrementos de 2 em 2 no contador;
Utilize o break para parar o loop quando chegar no número 24;
*/

$x = 4;

while($x <= 30) {
    echo "O X é $x <br>";

    if($x === 24) {
        echo "Terminando o loop <br>";
        break;
    }

   $x += 2;
}

echo "Saiu do loop <br>";