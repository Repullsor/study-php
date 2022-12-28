<?php
  include_once("templates/header.php");
?>

<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title">Criar Contato</h1>
  <form action="<?= $BASE_URL ?>config/process.php" method="POST"></form>
  <input type="hidden" name="type" value="create">
</div>

<?php
  include_once("templates/footer.php");
?>
    
