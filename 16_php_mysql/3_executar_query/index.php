<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  //Assunto da aula
  $sql = "SELECT * FROM itens";

  $result = $conn->query($sql);

  print_r($result);

  $conn->close(); //Usado para encerrar a conexão após uma busca no banco.

?>