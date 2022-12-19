<?php

  $idade1 = 17;
  $idade2 = 22;
  $idade3 = 25;

  $maioridade = 18;

  $msg = "Você é maior de idade <br>";

  if($idade1 >= $maioridade) {
    echo "1 " . $msg;
  }

  if($idade2 >= $maioridade) {
    echo "2 " . $msg;
  }

  if($idade3 >= $maioridade) {
    echo "3 " . $msg;
  }

?>