<?php

  $arr = [1, 2, 4, 19, 234, 12, 34, 5, 1];

  function soma($a, $b) {
    return $a + $b; 
  }

  function subtração($a, $b) {
    return $a - $b; 
  }

  $resultado = array_reduce($arr , 'soma');

  echo "$resultado <br>";

  $resultado = array_reduce($arr , 'subtração');

  echo "$resultado <br>";

?>