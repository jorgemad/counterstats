<!DOCTYPE html>

<?php
include 'includes/header.php';
if ((!(isset($_SESSION['erro'])))){
	$_SESSION['erro'] = false;
}

if (!(isset($_SESSION['started'])))
{
	$_SESSION['erro'] = true;
	header('location:login.php');
}?>
<!-- Page Content -->
<div class="container">
  <h1 class="my-4">O teu perfil</h1>
  <p>Aqui podes consultar os teus dados de perfil e edita-los!</p>
  <br>
	<?php
	echo "  <a class='btn btn-outline-secondary' href='editprofile.php?id=" . $_SESSION['login']['codutilizador'] . "'>Editar Perfil</a>";
	?>
  <br>
  <div style="padding-top:25px;" class="row">

    <div class="col-sm-4">
      <div class="card">
        <div class="card-header">Nome</div>
        <div class="card-body text-secondary">
          <?php echo "<h5 class='card-title'>".$_SESSION['login']['nome']."</h5>"?>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-header">Email</div>
          <div class="card-body text-secondary">
            <?php echo "<h5 class='card-title'>".$_SESSION['login']['email']."</h5>"?>
          </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-header">Data de Nascimento</div>
          <div class="card-body text-secondary">
            <?php echo "<h5 class='card-title'>".$_SESSION['login']['datanascimento']."</h5>"?>
          </div>
      </div>
    </div>
  </div>
  <div style="padding-top:25px;" class="row">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-header">Steam Username</div>
          <div class="card-body text-secondary">
            <?php echo "<h5 class='card-title'>".$_SESSION['login']['steamuser']."</h5>"?>
          </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-header">Rank</div>
          <div class="card-body text-secondary">
            <?php echo "<h5 class='card-title'>".$_SESSION['login']['ranki']."</h5>"?>
          </div>
      </div>
    </div>
  </div>
  <hr>
</div>

  <!-- /.row -->


  <?php include 'includes/footer.html' ?>
