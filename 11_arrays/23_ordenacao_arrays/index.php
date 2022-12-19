<?php

  $arr = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4];

  sort($arr); //Ordena a array em ordem crescente

  print_r($arr);
  echo "<br>";

  $arr2 = [2, 1, 334, 32, 123, 65, 38, 9999, 12, 4]; //Ordena a array em ordem decrescente

  rsort($arr2);

  print_r($arr2);
  echo "<br>";

  $nomes = ["Endo", "Goenji", "Kido", "Kazemaru", "Fubuki"];

  sort($nomes);

  print_r($nomes);
  echo "<br>";

?>