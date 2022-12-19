<?php

  $pessoa = ["Rafael", 22, "Estagiário", "verde"];

  print_r($pessoa);
  echo "<br>";

  list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

  echo "$nome <br>";
  echo "$idade <br>";
  echo "$profissao <br>";
  echo "$corDosOlhos <br>";

?>