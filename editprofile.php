
<?php
include 'includes/header.php';
include 'model/utilizador.model.php';
include 'controller/edit.controller.php';

?>

  <!-- //session_unset();
    //session_destroy(); ?> -->
  <!-- Navigation -->
  <div style="padding-top: 40px" class="container">
  <div class="row">
    <div class="col-lg-12">
      <h1>Register</h1>
    <p>Porfavor preencha os dados abaixo.</p>
    <?php if (isset($_POST['gravar']))
    {
      echo "<div class='alert alert-success' role='alert'> Edição bem sucedida!</div>";
    } ?>
    <hr>
    <form action="editprofile.php" method="post">
      <label for="nome"><b>Nome</b></label>
      <input type="text" placeholder="Nome" value="<?= $nome ?>" name="nome" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Email" value="<?= $email ?>" name="email" required>

      <label for="suser"><b>Steam User</b></label>
      <input type="text" placeholder="Steam User" value="<?= $steamuser ?>" name="suser" required>

      <label for="Dnascimento"><b>Data de Nascimento</b></label>
      <input type="date" placeholder="Data de nascimento" value="<?= $dnascimento ?>" name="dnascimento" required>

      <label for="rank"><b>Rank</b></label>
      <input type="text" placeholder="rank" value="<?= $ranki ?>" name="rank" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="password" value="<?= $password ?>"name="psw" required>

      <hr>
      <button name="gravar" type="submit" class="btn btn-outline-secondary">Registar</button>
      <a href="profile.php" class="btn btn-outline-secondary">cancelar</a>
  </form>
  </div>

    </div>
  </div>
  </div>
  <?php include 'includes/footer.html'?>
