<?php 

if(10 > 5) {
    echo "Entrou no if <br>";
} else if(10 > 6) {
    echo "Entrou no else if <br>";
}

if(10 < 5) {
    echo "Entrou no if <br>";
} else if(10 > 6) {
    echo "Entrou no else if <br>";
}

if(10 < 5) {
    echo "Entrou no if <br>";
} else if(10 < 6) {
    echo "Entrou no else if <br>";
} else {
    echo "Entrou no else 3 <br>";
}

$a = 10;
$b = 5;
$msg = "Entrou no else if <br>";

if(10 < 5) {
    echo "Entrou no if <br>";
} else if($a > $b) {
    echo $msg;
    echo "<br>";
}

if(10 < 5) {
    echo "Entrou no if <br>";
} else if(10 < 6) {
    echo "Entrou no else if <br>";
} else if(11 > 1){
    echo "Entrou no else if 2 4 <br>";
} else {
    echo "Entrou no else 3 <br>";
}