<?php

$a = 10;    
$b = 3;
$c = 2;

$divExata = false;

if ($a % $c === 0) {
    echo "A divisão de $a por $c é exata", $divExata;
} else {
    echo "A divisão de $a por $c não é exata", $divExata;
}

