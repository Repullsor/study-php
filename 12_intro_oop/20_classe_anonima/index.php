<?php

  $pessoa = new class() {

    public $nome = "Rafael";

    public function dizerNome() {
        echo "Olá meu noem é $this->nome <br>";
    }
  };

  echo $pessoa->nome . "<br>";

  $pessoa->dizerNome();

?>