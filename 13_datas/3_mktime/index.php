<?php 

$dataNascimento = mktime(02, 12, 33, 02, 05, 1991);
echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/y', $dataNascimento);
echo $dataNascimentoFormatada .'<br>';

$dataEspecifica = mktime(10,12,23,10,22,2065);
echo $dataEspecifica .'<br>';

$dataFuturaFormatada = date('d/m/Y', $dataEspecifica);
echo $dataFuturaFormatada .'<br>';
