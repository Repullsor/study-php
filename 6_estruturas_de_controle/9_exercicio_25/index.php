<?php

  $x = 5;
  $y = 100;
  $z = "Estudando";

  if(is_int($x)) {
    echo "É um número! <br>";
    echo $x * 2 . "<br>";

    if($x * 2 > 100) {
        echo "O número é maior que 100 <br>";
    } else {
        echo "O número não é maior que 100! <br><br>";
    }
    
  } else {
    echo "Não é um número <br>";
  }

  if(is_int($y)) {
    echo "É um número! <br>";
    echo $y * 2 . "<br>";

    if($y * 2 > 100) {
        echo "O número é maior que 100 <br><br>";
    } else {
        echo "O número não é maior que 100! <br>";
    }
    
  } else {
    echo "Não é um número <br>";
  }

  if(is_int($z)) {
    echo "É um número! <br>";
    echo $z * 2 . "<br>";

    if($z* 2 > 100) {
        echo "O número é maior que 100 <br>";
    } else {
        echo "O número não é maior que 100! <br>";
    }
    
  } else {
    echo "Não é um número <br>";
  }


?> 