<?php

  $velocidade = 80;
  $limite = 40;

  if($velocidade < $limite) {
    echo "Está numa velocidade segura! <br>";
  } else if($velocidade = $limite) {
    echo "Tome cuidado! Você está no limite da velocidade! <br>";
  } else {
    echo "Você foi multado! Velocidade acima do permitido!";
  }

?>