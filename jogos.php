<?php include 'includes/header.php' ?>
<?php include 'model/jogo.model.php'?>
<?php include 'controller/jogolist.controller.php'?>
    <!-- //session_unset();
    //session_destroy(); ?> -->
  <!-- Navigation -->
  <!-- Page Content -->
  <div style="padding-top: 40px" class="container">
  <div class="row">
    <div class="col-lg-12">
    <h1>Lista de Jogos</h1>
    <p>Aqui pode gerir os jogos que fizeste!</p>
    <?php
    if (isset($_GET['action'])){
      if ($_GET['action'] == 'delete') {
        echo "<p style='color: red;'>Jogo eliminado com sucesso!</p>";
     }
    }
    ?>
    <hr>
    <a href="regjogo.php" class="btn btn-outline-secondary">Novo Jogo</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Data do Jogo</th>
          <th scope="col">Kills</th>
          <th scope="col">Deaths</th>
          <th scope="col">Assists</th>
          <th scope="col">KDR</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($jogo as $jogo){
        ?>
        <tr>
          <td scope="row"><?= $jogo['datajogo'] ?></td>
    			<td><?= $jogo['kills'] ?></td>
    			<td><?= $jogo['deaths'] ?></td>
    			<td><?= $jogo['assist'] ?></td>
          <td><?= $jogo['kdr'] ?></td>
    			<td>

    				<?php
    				echo "<a class='btn btn-primary' href='jogos.php?action=delete&id=" . $jogo['codjogo'] . "' role='button'>Apagar</a>";
    				?>

    			</td>
    	    </tr>

      	<?php
    	}
    	?>
      </tbody>
    </table>
  </div>
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
<?php include 'includes/footer.html'?>
