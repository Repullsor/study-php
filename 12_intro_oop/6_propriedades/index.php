<?php

  class Car {

    public $rodas = 4;
    public $aro = 20;
    public $cor = "Vermelha";

    function ligar() {
        echo "Vrummmmmmm <br>";
    }

  }

  $ferrari = new Car;

  echo $ferrari->aro . "<br>";
  echo $ferrari->rodas . "<br>";

  $ferrari->cor = "Azul <br>"; //Assim que se altera o valor da propriedade

  echo $ferrari->cor;

  $ferrari->ligar();

?>