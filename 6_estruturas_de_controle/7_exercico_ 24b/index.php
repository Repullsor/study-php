<?php

  $peso1 = 68;
  $peso2 = 76;
  $peso3 = 85;

  $pesolimite = 80;

  $msg1 = "Você está dentro do peso limite! <br>";
  $msg2 = "Você está acima do peso limite! <br>";

  if($peso1 > $pesolimite) {
    echo $msg1;
  } else {
    echo $msg2;
  }

  if($peso2 > $pesolimite) {
    echo $msg1;
  } else {
    echo $msg2;
  }

  if($peso3 > $pesolimite) {
    echo $msg1;
  } else {
    echo $msg2;
  }

?>