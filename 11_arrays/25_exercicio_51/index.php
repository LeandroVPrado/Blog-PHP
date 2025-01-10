<?php

/**
 * Exercício 51
 * Crie um array associativo com chaves com valor de nomes, e valores com uma pontuação;
 * Ordene os dados do maior para o menor;
 * Exiba uma lista, simulando um ranking, em HTML;
 */

 $arr = [
    "Capitão América"=> 92,
    "Thor"=> 98,
    "Homem de Ferro"=> 95,
    "Senhor das Estrelas"=> 93
 ];

 arsort($arr);
 ?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>pontuação</th>
    </tr>
    <?php foreach ($arr as $nome => $pontuacao) : ?>
        <tr>
            <td><?= $nome ?></td>
            <td><?= $pontuacao ?></td>
            <?php endforeach; ?>
        </tr>
</table>