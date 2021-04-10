
<?php
include 'includes/header.php';
include 'model/utilizador.model.php';
include 'controller/registar.controller.php';

?>

  <!-- //session_unset();
    //session_destroy(); ?> -->
  <!-- Navigation -->
  <div style="padding-top: 40px" class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Register</h1>
    <p>Porfavor preencha os dados abaixo.</p>
    <?php if (isset($_POST['registar']))
    { echo "<div class='alert alert-success' role='alert'> Utilizador Registado com Sucesso! </div>";} ?>
    <hr>
    <form action="registar.php" method="post">
      <label for="nome"><b>Nome</b></label>
      <input type="text" placeholder="Nome" name="nome" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Email" name="email" required>

      <label for="suser"><b>Steam User</b></label>
      <input type="text" placeholder="Steam User" name="suser" required>

      <label for="Dnascimento"><b>Data de Nascimento</b></label>
      <input type="date" placeholder="Data de nascimento" name="dnascimento" required>

      <label for="rank"><b>Rank</b></label>
      <input type="text" placeholder="rank" name="rank" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="password" name="psw" required>

      <hr>
      <button name="registar" type="submit" class="btn btn-outline-secondary">Registar</button>
  </form>
  </div>

  <div class="container signin">
    <p>Já tens conta? Então faz <a class="address" href="login.php">Login</a>.</p>
  </div>
    </div>
  </div>
  </div>
  <?php include 'includes/nav.php'?>
