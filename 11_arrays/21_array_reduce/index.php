<?php

$arr = [ 1,2,3,4,5,6,19,234,12,34,5,12];

function soma($a, $b) {
    return $b + $a;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado <br>";