<?php

  $arr = [5, "Rafael", true, false, "Olá", 3.14, "Teste", true, [], "Palavra", 5, 10, "Tchau"];

  $x = count($arr); // conta quantos itens tem a array
  $y = 0;

  while($y < $x) {

    if(is_string($arr[$y])) { // verifica se é uma string, chamou a array e dentro da array chamou $y
        echo $arr[$y] . "<br>";
    }

    $y++; // pra ele ir atingindo o valor de $x para ele sair do loop
  }

?>