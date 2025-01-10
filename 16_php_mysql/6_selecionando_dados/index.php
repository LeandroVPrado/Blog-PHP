<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// SELECT
$q = "SELECT * FROM itens";
$result = $conn->query($q);
$conn->close();

// UM RESULTADO
$item = $result->fetch_assoc();

print_r($item);
echo "<br>";

// TODOS OS RESULTADOS
$itens = $result->fetch_all();

print_r($itens);
echo "<br>";
