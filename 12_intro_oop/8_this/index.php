<?php

  class Animal {

    public $nome;

    function escolherNome($nome) {
        $this->nome = $nome;
    }

    function latir() {
        //echo "Au au <br>";
        return "Au au <br>";
    }

    function latirForte(){
        return strtoupper($this->latir());
    }
  }

  $lulu = new Animal;

  echo "O nome do animal é: $lulu->nome <br>"; //Não vai imprimir nada

  $lulu->escolherNome("Lulu");

  echo "O nome do animal é: $lulu->nome <br>";

  echo $lulu->latir();

  echo $lulu->latirForte();

?>