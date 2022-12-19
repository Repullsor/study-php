<?php

  $x = 0;

  while($x < 10) {
    echo "O X é $x <br>";

    if($x === 5) { // === idêntico, tanto o valor quanto o tipo
        echo "Terminando o loop <br>";
        break;
    }

    $x++; // soma +1
  }

  echo "Saiu do loop <br>";

?>