<?php

  class Pessoa {

    public $nome;
    public $idade;

    function andar($m) {

        echo "A pessoa andou $m metros <br>";

    }

  }

  $rafael = new Pessoa;

  $rafael->nome = "Rafael";
  $rafael->idade = 22;

  echo "O nome dele é $rafael->nome e tem $rafael->idade anos <br>";

  $rafael->andar(1000);

  $gabriel = new Pessoa;

  $gabriel->nome = "Gabriel";
  $gabriel->idade = 21;

  echo "O nome dele é $gabriel->nome e tem $gabriel->idade anos <br>";

  $gabriel->andar(500);


?>