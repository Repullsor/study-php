<?php

  class Pessoa {

    function falar() {
        echo "Olá, eu sou um objeto! <br>";
    }

    function somar($x, $y) {
        echo $x + $y . "<br>";
    }
    
  }

  $rafael = new Pessoa;

  $rafael->falar();
  $rafael->falar();

  $gabriel = new Pessoa;

  $gabriel->falar();

  $rafael->somar(1, 1);

  $gabriel->somar(10, 14);

?>