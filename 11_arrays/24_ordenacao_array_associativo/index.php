<?php

  $arr = [
    'Seiya' => 20,
    'Shiriyu' => 21,
    'Yoga' => 22,
    'Shun' => 19,
    'Ikki' => 23
  ];

  asort($arr); //Ordena por ordem numérica crescente
  print_r($arr);
  echo "<br>";

  arsort($arr); //Ordena por ordem numérica decrescente
  print_r($arr);
  echo "<br>";

  ksort($arr); //Ordena por ordem alfabética decrescente
  print_r($arr);
  echo "<br>";

  krsort($arr); //Ordena por ordem alfabética decrescente
  print_r($arr);
  echo "<br>";

?>