<?php

  function teste($a = "teste") {

    echo "O valor de A é $a <br>";

  }

  teste();
  teste("eoq");

  function testando($b, $a = "X") {

    echo "O valor de a é: $a e de b é: $b <br>";

  }

  testando("1");
  testando("1", "2");

  //Uma boa prática é sempre colocar os argumentos default por último.

?>