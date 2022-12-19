<?php

  if(5 == "5") { //igualdade
    echo "5 é 5 1<br>";
  }

  if(5 === "5") { //identico a. verifica o valor eo tipo
    echo "5 é 5 2<br>";
  }

  if(5 === 5) {
    echo "5 é 5 3<br>";
  }

  $a = 4;
  $b = 4;
  $c = "4";

  if($a === $b) {
    echo "A é igual a B <br>";
  }

  if($a === $b) {
    echo "A é igual a C <br>";
  }

?>