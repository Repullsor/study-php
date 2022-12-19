<?php

  class Cachorro {

    function latir() {
        echo "Au au <br>";
    }

    function andar() {
        echo "O cacchoro está andando <br>";
    }

  }

  $caramelo = new Cachorro;

  $caramelo->latir();
  $caramelo->andar();

?>