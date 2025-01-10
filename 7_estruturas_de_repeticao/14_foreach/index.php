<?php 

$nomes = ["Leandro", "Ana", "Lidiane", "Cassiano"];

$a = "Valeu";

foreach ($nomes as $nome) {
    echo "O nome do índice atual é $nome <br>";
    if($nome == "Leandro"){
        echo "Opa $a <br>";
    }
}