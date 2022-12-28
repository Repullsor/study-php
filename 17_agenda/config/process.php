<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  if(!empty($_GET)) {
    $id = $_GET["id"];
  }

  //Retorna os dados de um contato

  if(!empty($id)) {

    $query = "SELECT *FROM contacts WHERE id = :id";

    $smt = $conn->prepare($query);

    $smt->bindParam(":id", $id);

    $smt->execute();

    $contact = $smt->fetch();

  } else {

    //Retorna todos os cotatos
    $contacts = [];

    $query = "SELECT * FROM contacts";

    $smt = $conn->prepare($query);

    $smt->execute();

    $contacts = $smt->fetchAll();

  }

?>