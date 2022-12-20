<?php

  class Cachorro {

    public $raca;
    public $tamanho;
    public $nome;


    function __construct($raca, $tamanho, $nome)
    {
        $this->raca = $raca;
        $this->tamanho = $tamanho;
        $this->nome = $nome;
        
    }
  }

  $bolinha = new Cachorro("Vira-Lata", "Grande", "Bolinha");

  echo "O cachorro $bolinha->nome é da raça $bolinha->raca e seu tamanho é $bolinha->tamanho <br>";


?>