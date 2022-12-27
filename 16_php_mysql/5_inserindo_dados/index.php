<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  //Assunto aula

  $table = "itens";
  $nome = "Xícara";
  $descricao = "é uma xícara usada de cor rosa";

  $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')"; //Colocar os dados entre aspas mesmo sendo uma string.

  $conn->query($q);

  $conn->close();

  ?>
  