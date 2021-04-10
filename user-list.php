<?php include 'includes/header.php' ?>
<?php include 'model/utilizador.model.php'?>
<?php include 'controller/list.controller.php'?>

  <!-- Page Content -->
  <div style="padding-top: 40px" class="container">
  <div class="row">
    <div class="col-lg-12">
    <h1>Lista de Utilizadores Registados</h1>
    <p>Aqui pode gerir os utilizadores que tão registados na sua página!</p>
    <?php
    if (isset($_GET['action'])){
      if ($_GET['action'] == 'delete') {
        echo "<p style='color: red;'>Utilizador eliminado com sucesso!</p>";
     }
    }
    ?>
    <hr>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Steam User</th>
          <th scope="col">Data de Nascimento</th>
          <th scope="col">rank</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach($utilizador as $utilizador){
        ?>
        <tr>
          <td scope="row"><?= $utilizador['codutilizador'] ?></td>
    			<td><?= $utilizador['nome'] ?></td>
    			<td><?= $utilizador['email'] ?></td>
    			<td><?= $utilizador['steamuser'] ?></td>
          <td><?= $utilizador['datanascimento'] ?></td>
          <td><?= $utilizador['ranki'] ?></td>
    			<td>

    				<?php
    				echo "<a class='btn btn-primary' href='user-list.php?action=delete&id=" . $utilizador['codutilizador'] . "' role='button'>Apagar</a>";
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

  <!-- Footer -->
  <?php include 'includes/footer.html' ?>
