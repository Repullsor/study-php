<?php

  $str = "Esta é a miha string";

  $minha = substr($str, 10, 5); //String pai, indice inicial(primeira letra), comprimento da palavra

  echo $str . "<br>";
  echo $minha . "<br>";

  $str2 = "Testando esta string abc";

  $novaString = substr($str2, 8,);

  echo $novaString . "<br>";

  $novaString2 = substr($str2, 8, -3);

  echo $novaString2 . "<br>";
  
?>