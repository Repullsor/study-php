<?php

  // Arquivos que não existem
  // include_once "teste.php";

  // Arquivos que existem
  include_once "teste2.php"; //once permite não duplicar o arquivo mais de uma vez
  include_once "teste2.php";

  // Arquivos que não existem
  // require_once "teste.php";

  require_once "teste3.php";
  require_once "teste3.php";

?>

<p>Testando código!</p>