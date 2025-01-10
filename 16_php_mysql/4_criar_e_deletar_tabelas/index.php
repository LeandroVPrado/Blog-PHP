<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// CREATE TABLE 
// $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

// DROP TABLE
$q = "DROP TABLE teste";

//  CHAMAR A QUERY E FECHAR O BANCO
$conn->query($q);
$conn->close();
