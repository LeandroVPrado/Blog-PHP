<?php

$a = "teste";
$b = 12.5;

if (is_float($a)) {
    echo "É um float 1 <br>";
}

if (is_float($b)) {
    echo "É um float 2 <br>";
}

if (is_float(13.5)) {
    echo "É um float 3 <br>";
}

if (is_float("teste")) {
    echo "É um float 4 <br>";
}