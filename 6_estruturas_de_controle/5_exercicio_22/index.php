<?php

  $idade1 = 17;
  $idade2 = 22;
  $idade3 = 25;

  $maioridade = 18;

  $msg1 = "Você é maior de idade <br>";
  $msg2 = "Você é menor de idade <br>";

  if($idade1 >= $maioridade) {
    echo "1 " . $msg1;
  } else {
    echo "1 " . $msg2;
  }

  if($idade2 >= $maioridade) {
    echo "2 " . $msg1;
  } else {
    echo "2 " . $msg2;
  }

  if($idade3 >= $maioridade) {
    echo "3 " . $msg1;
  } else {
    echo "3 " . $msg2;
  }

?>