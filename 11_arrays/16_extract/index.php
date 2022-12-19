<?php

  $arr = [
    'cor' => 'vermelho',
    'forma' => 'retângular',
    'material' => 'aço'
  ];

  extract($arr);

  echo "$cor <br>";
  echo "$forma <br>";
  echo "$material <br>";

  $nome = "Rafael";

  $pessoa = [
    'nome' => 'Shiriyu',
    'idade' => 22
  ];

  extract($pessoa);

  echo "$nome <br>";
  echo "$idade <br>";

?>