<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(1987,10,22);


print_r($dataA);
echo "<br>";
print_r($dataB);    
echo "<br>";

$diferenca = $dataA->diff($dataB);

print_r($diferenca);
echo "<br>";

echo $diferenca->format("%a days");
echo "<br>";