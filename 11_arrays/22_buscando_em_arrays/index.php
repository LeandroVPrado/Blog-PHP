<?php

$arr = ['banana', 'maça', 'batata', 'pêra', 'mamão'];

if(in_array("batata", $arr)) {
    echo "Há o item batata no array <br>";
} else {
    echo "Não há o item batata no array <br>"; 
}

$b = "banana";
if(in_array($b, $arr)) {
    echo "Há o item batata no array <br>";
} else {
    echo "Não há o item batata no array <br>"; 
}

if(in_array("teste", $arr)) {
    echo "Há o item batata no array <br>";
} else {
    echo "Não há o item batata no array <br>"; 
}