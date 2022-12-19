<?php

  $pessoas = [
    'Rafael' => 22,
    'Luíz' => 20,
    'Jhonnatan' => 30,
    'Flávio' => 37
  ];

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
        <?php endforeach; ?>
</table>