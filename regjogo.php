
<?php
include 'includes/header.php';
include 'model/jogo.model.php';
include 'controller/registarjogo.controller.php';

?>

  <!-- //session_unset();
    //session_destroy(); ?> -->
  <!-- Navigation -->
  <div style="padding-top: 40px" class="container">
  <div class="row">
    <div class="col-lg-12">
    <h1>Novo Jogo</h1>
    <p>Porfavor preencha os dados abaixo.</p>
    <?php if (isset($_POST['registar']))
    { echo "<div class='alert alert-success' role='alert'> Utilizador Registado com Sucesso! </div>";} ?>
    <hr>
    <form action="regjogo.php" method="post">
      <label for="nome"><b>Data Jogo</b></label>
      <input type="date" name="djogo" required>

      <label for="email"><b>Kills</b></label>
      <input type="text" placeholder="kills" name="kills" required>

      <label for="suser"><b>Deaths</b></label>
      <input type="text" placeholder="deaths" name="deaths" required>

      <label for="Dnascimento"><b>Assists</b></label>
      <input type="text" placeholder="assists" name="assists" required>

      <label for="rank"><b>KDR</b></label>
      <input type="text" placeholder="kdr" name="kdr" required>
      <p>Número de Kills a dividir pelo numero de deaths</p>

      <hr>
      <button name="registar" type="submit" class="btn btn-outline-secondary">Registar</button>
  </form>
  </div>
    </div>
  </div>
  </div>
  <?php include 'includes/footer.html'?>
