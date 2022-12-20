<?php

  class Humano {

    public function falar() {
        echo "Olá";
    }
  }

  $rafael = new Humano;

  $teste = 10;

  if(is_object($rafael)) {
    echo "É um objeto <br>";
  } else {
    echo "Não é um onjeto <br>";
  }

  if(is_object($teste)) {
    echo "É um objeto <br>";
  } else {
    echo "Não é um objeto <br>";
  }

  echo get_class($rafael) . "<br>";

  if(method_exists($rafael, "falar")) {
    echo "Método existe <br>";
  } else {
    echo "Método não existe <br>";
  }

  if(method_exists($rafael, "asd")) {
    echo "Método existe <br>";
  } else {
    echo "Método não existe <br>";
  }

?>