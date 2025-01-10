<?php

/**
 * Exercício 50
 * Crie um array associativo com nomes e idades;
 * Imprima estes dados em uma tabela de HTML;
 * Dica: utilize as tags do elemento table
 */

 $pessoas = [
    "Leandro"=> 37,
    "Ana"=> 33,
    "Batman"=> 87,
    "Superman"=> 93,
 ];

 ?>

 <table border="1">
    <tr>
        <th>Nome</th>
        <th>idade</th>
    </tr>
    <?php foreach ($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade ?></td>
        </tr>
        <?php endforeach; ?>
 </table>


