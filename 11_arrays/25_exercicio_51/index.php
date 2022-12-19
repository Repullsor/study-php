<?php

  $ranking = [
    'Raphael' => 23,
    'Weverton' => 12,
    'Dudu' => 7,
    'Rony' => 10,
    'Gustavo' => 15
  ];

  arsort($ranking);

?>

<h1>Ranking:</h1>
<ol>
     <?php foreach($ranking as $jogador => $numero): ?>
        <li><?= $jogador ?> -> <?= $numero ?> numero</li>
        <?php endforeach; ?>

</ol>