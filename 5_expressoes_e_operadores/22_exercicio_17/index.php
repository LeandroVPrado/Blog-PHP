<?php 

/*
Verifique as seguintes operações com AND;
15>5 and "João === "João"
"teste" > 5 and 1
2 == 3 and 5>=3
*/ 

if(15 > 5 && "João" === "João") {
    echo "Entrou no if 1 <br>";
}

if("teste" > 5 && 1) {
    echo "Entrou no if 2 <br>";
}

if(2 == 3 && 5 >= 3) {
    echo "Entrou no if 3 <br>";
}