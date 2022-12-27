<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  //Assunto aula

  $nome = "Suporte de microfone";
  $descricao = "O suporte é novo e foi fabricado na China";

  $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)" ); //? é os valores direto na query

  $stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double

  $stmt->execute();

  ?>