<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  //Assunto aula
  $q = "SELECT * FROM itens";

  $result = $conn->query($q);

  //Um resultado
  $item = $result->fetch_assoc();

  //TODOS OS RESULTADOS
  $itens = $result->fetch_all();

  print_r($itens);

  ?>