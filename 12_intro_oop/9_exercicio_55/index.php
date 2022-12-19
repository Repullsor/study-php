<?php

  class Carro {

    public $modelo;
    public $cor;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel) {
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima() {
        echo "A velocidade máxima deste carro é: $this->getVelocidadeMaxima km/h <br>";
    }

  }

  $toyota = new Carro;




?>