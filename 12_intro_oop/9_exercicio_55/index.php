<?php

  class Carro {

    public $modelo;
    public $cor;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel) {
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima() {
        echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
    }

  }

  $toyota = new Carro;

  $toyota->modelo = "Supra";
  $toyota->cor = "Laranja";

  $toyota->setVelocidadeMaxima(400);

  $toyota->getVelocidadeMaxima();

  $nissan = new Carro;

  $nissan->setVelocidadeMaxima(300);

  $nissan->getVelocidadeMaxima();



?>