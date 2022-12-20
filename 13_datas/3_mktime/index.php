<?php

  $dataNascimento = mktime(10, 04, 00, 12, 31, 1999);

  echo $dataNascimento . "<br>";

  $dataNascimentoFormatada = date('d/m/Y', $dataNascimento);

  echo $dataNascimentoFormatada . "<br>";

  $dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);

  $dataFuturaFormatada = date('m/d/y', $dataEspecifica);

  echo $dataFuturaFormatada . "<br>";

?>