<?php

  class Humano {

    public $idade = 22 . "<br>";

    public function falar() {
        echo "Estou falando! <br>";
    }

    protected function gritar() {
        echo "AGORA ESTOU GRITANDO! <br>";
    }

    public function acessarGritar() {
        $this->gritar();
    }
  }

  class Professor extends Humano {

    public function acessarGritarProfessor() {
        $this->gritar();
    }
  }

  $rafael = new Humano;

  $rafael->falar();
  echo $rafael->idade;
  $rafael->acessarGritar();

?>