<?php

  $animal = "Gato";
  $cor = "Rajado";
  $personalidade = "Brincalhao";
  $tamanho = "Pequeno";

  $caracteristicas = compact("animal", "cor", "personalidade", "tamanho");

  print_r($caracteristicas);
  echo "<br>";

  foreach($caracteristicas as $pet => $value) {

    echo "$pet: $value <br>";
    
  }

?>