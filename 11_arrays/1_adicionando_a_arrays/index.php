<?php

$arr = [];

// Adicionando valores

print_r( $arr );
echo "<br>";

$arr[0] = 10;
print_r( $arr);
echo "<br>";

$arr[1] = 15;
print_r( $arr);
echo "<br>";

$arr[5] = 25;
print_r( $arr);
echo "<br>";

// Modificando valores

$arr[1] += 55;
print_r( $arr);
echo "<br>";

$arrayAssoc = [];
print_r( $arrayAssoc );
echo "<br>";

$arrayAssoc["carro"] = "BMW";
print_r( $arrayAssoc );
echo "<br>";

$arrayAssoc["avião"] = "Boeing";
print_r( $arrayAssoc );
echo "<br>";

$arrayAssoc["carro"] = "Ferrari";
print_r( $arrayAssoc );
echo "<br>";