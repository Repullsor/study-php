<?php

  $frase = "carro - navio - helicóptero - barco - jangada";

  $fraseArray = explode(" - ", $frase);

  print_r($fraseArray);

  for($i = 0; $i < count($fraseArray); $i++) {

    echo "Item: $fraseArray[$i] <br>";
  }

?>