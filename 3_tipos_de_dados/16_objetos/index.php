<?php

  class Pessoa {
    function falar() {
        echo "Olá peessoal!";
    }
  }

  $rafael = new Pessoa();

  $rafael->nome = "Rafael";

  echo $rafael->nome;

  echo "<br>";

  $rafael->falar();

?>