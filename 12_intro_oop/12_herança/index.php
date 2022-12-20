<?php

  class Humano {

    public $idade = 22;

    public function falar() {
        echo "Olá mundo! <br>";
    }

    private function gritar() {
      echo "PHP É MUITO BOM! <br>";
    }

    public function acessarGritar() {
      $this->gritar();
    }

    protected function falarBaixinho() {
      echo "lalala <br>";
    }

    public function acessarFalarBaixinho() {
      $this->falarBaixinho();
    }
  }

  class Programador extends Humano {

    public function acessarFalarBaixinhoProgramador() {
      $this->falarBaixinho();

    }
    

  }

  $rafael = new Humano;

  $rafael->falar();
  $rafael->acessarGritar();
  $rafael->acessarFalarBaixinho();

  $gleyver = new Programador;

  echo $gleyver->idade . "<br>";

  $gleyver->falar();
  $gleyver->acessarGritar();
  $gleyver->acessarFalarBaixinho();

?>