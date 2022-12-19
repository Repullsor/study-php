<?php

  $operacao = "5" * 12;

  echo $operacao . "<br>";

  echo gettype($operacao);
  echo "<br>";
  echo gettype([]);
  echo "<br>";
  echo gettype(12.2); //double também é um noem para float
  echo "<br>";
  echo gettype("teste");

?>