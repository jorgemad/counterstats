<?php include 'includes/header.php' ?>
<?php include 'model/jogo.model.php'?>
<?php include 'controller/ajogoslist.controller.php'?>
    <!-- //session_unset();
    //session_destroy(); ?> -->
  <!-- Navigation -->
  <!-- Page Content -->
  <div style="padding-top: 40px" class="container">
  <div class="row">
    <div class="col-lg-12">
    <h1>Ranking de KDR</h1>
    <p>Lista dos 10 melhores KDR obtidos no jogo!</p>
    <hr>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Posição</th>
          <th scope="col">Nome</th>
          <th scope="col">Data do Jogo</th>
          <th scope="col">Kills</th>
          <th scope="col">Deaths</th>
          <th scope="col">Assists</th>
          <th scope="col">KDR</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $i = 1;
          foreach($jogo as $jogo){
        ?>
        <tr>
          <td><?=$i?></td>
          <td><?=$jogo['nome']?></td>
          <td scope="row"><?= $jogo['datajogo'] ?></td>
    			<td><?= $jogo['kills'] ?></td>
    			<td><?= $jogo['deaths'] ?></td>
    			<td><?= $jogo['assist'] ?></td>
          <td><?= $jogo['kdr'] ?></td>
          <?php $i = $i + 1 ?>
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
