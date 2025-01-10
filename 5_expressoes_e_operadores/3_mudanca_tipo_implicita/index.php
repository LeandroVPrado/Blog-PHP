<?php 

echo 5 / 2;
echo "<br>";

if(is_float(5/2)) {
    echo "É float <br>";
}

echo 2 . 3;
echo "<br>";

if(is_string(2 . 3)) {
    echo "É string <br>";
}

$nome = "Leandro";
$sobreNome = "Prado";

$nomeCompleto = $nome . " " . $sobreNome;
echo $nomeCompleto;
echo "<br>";