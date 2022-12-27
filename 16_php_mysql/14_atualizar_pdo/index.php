<?php

  $host = "localhost";
  $db = "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

  //Assunto da aula
  $id = 5;
  $nome = "Caneta Azul";
  $descricao = "Azul caneta, ta marcada com minhas lestras";

  $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

  $stmt->bindParam(":id", $id);
  $stmt->bindParam(":nome", $nome);
  $stmt->bindParam(":descricao", $descricao);

  $stmt->execute();

  ?>