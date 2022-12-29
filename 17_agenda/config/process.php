<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  //MODIFICAÇÕES NO BANCO
  if(!empty($data)) {

    //Criar contato
    if($data["type"] === "create") {

      $name = $data["name"];
      $phone = $data["phone"];
      $observations = $data["observations"];

      $query = "INSERT INTO contact (name, phone, observations) VALUES (:name, :phone, :observations)";

      $smt = $conn->prepare($query);

      $smt->bindParam(":name", $name);
      $smt->bindParam(":phone", $phone);
      $smt->bindParam(":observations", $observations);

      try {

        $smt->execute();
        $_SEESION["msg"] = "Contato criado com sucesso!";
    
      } catch(PDOException $e) {
        //Erro na conexão
        $error = $e->getMessage();
        echo "Erro $error";
      }

    } else if($data["type"] === "edit" ) {

      $name = $data["name"];
      $name = $data["phone"];
      $name = $data["observations"];
      $name = $data["id"];

      $query = "UPDATE contacts
                SET name = :name, phone = :phone, observations = :observatuions
                WHERE id = :id";

      $smt = $conn->prepare($query);

      $smt->bindParam(":name", $name);
      $smt->bindParam(":phone", $phone);
      $smt->bindParam(":observations", $observations);
      $smt->bindParam(":id", $id);

      try {

        $smt->execute();
        $_SEESION["msg"] = "Contato atualizado com sucesso!";
    
      } catch(PDOException $e) {
        //Erro na conexão
        $error = $e->getMessage();
        echo "Erro $error";
      }

    } else if($data["type"] === "delete") {

      $id = $data['id'];

      $query = "DELETE FORM contacts WHERE id = :id";

      $smt = $conn->prepare($query);

      $smt->bindParam(":id", $id);

      try {

        $smt->execute();
        $_SEESION["msg"] = "Contato removido com sucesso!";
    
      } catch(PDOException $e) {
        //Erro na conexão
        $error = $e->getMessage();
        echo "Erro $error";
      }

    }

    //Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

  //SELEÇÃO DE DADOS
  } else {

      $id;

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

  }

  //FECHAR CONEXÃO
  $conn = null;

?>