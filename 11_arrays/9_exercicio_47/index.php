<?php

  $carro = ["jaguar", 3.0, "azul", 18, "Teto solar", "automático"];

  list($marca, $motor, $cor, $aro, $teto, $transmissao) = $carro;

  echo "$marca <br>";
  echo "$motor <br>";
  echo "$cor <br>";
  echo "$aro <br>";
  echo "$teto <br>";
  echo "$transmissao <br>";

  print_r($carro);

?>