<?php

  class Car {

    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca)
    {
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }
  }

  $ferrari = new Car(7, "vermelha", "Ferrari");

  echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor <br>";

  $bmw = new Car(4, "verde", "BMW");

  echo "O carro é da marca $bmw->marca e tem a cor $bmw->cor <br>";
?>