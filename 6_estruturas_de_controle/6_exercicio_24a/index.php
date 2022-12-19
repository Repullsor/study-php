<?php

  $a = "Rafael";
  $b = 31;
  $c = true;

  if(is_string($a)) {
    echo "É uma string <br>";
  } else {
    echo "Não é uma string <br";
  }

  if(is_int($b)) {
    echo "É um inteiro <br>";
  } else {
    echo "Não é um inteiro";
  }

  if(is_bool($c)) {
    echo "É um boleano <br>";
  } else {
    echo "Não é um boleano";
  }

  if(is_bool($a)) {
    echo "É um boleano <br>";
  } else {
    echo "Não é um boleano <br>";
  }

  if(is_int($c)) {
    echo "É um inteiro <br>";
  } else {
    echo "Não é um inteiiro <br>";
  }

  if(is_string($b)) {
    echo "É uma string <br>";
  } else {
    echo "Não é uma string";
  }
?>