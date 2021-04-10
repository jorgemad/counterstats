<?php include 'includes/header.php' ?>

    <!-- //session_unset();
    //session_destroy(); ?> -->
  <!-- Navigation -->

  <header style="padding-top: 40px">
    <?php
    if ((!(isset($_SESSION['erro'])))){
    	$_SESSION['erro'] = false;
    }

      if ($_SESSION['erro'] == true){
        echo "<div style ='margin-bottom : 0' class='alert alert-danger' role='alert'>Não tem permissões para acesso a esta página</div>";
        $_SESSION['erro'] = false;
      }
    ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('images/1.png')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Os teus resultados!</h3>
            <p style="color:white;">Introduz o teu score e nós dizemos-te como estás a jogar!</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>O teu perfil!</h3>
            <p style="color:white;">Com o teu perfil poderás ver os teus melhores jogos!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome to CounterStats</h1>
    <p>Your Counter Strike: Global Offensive score keeper. Login and start posting your scores to know how you doing in CS:GO <br>Aqui poderá gravar as suas pontuações do counter Strike:Global Offensive. Faz login e começa publicar as tuas pontuações para saberes como estás.</p>
    <h2 style="padding-top:50px;padding-bottom:10px">Stats</h2>
    <p>Iremos com base nas tuas pontuações oferecer-te um vasto conjunto de estatisticas tais como KDR, ADR, Média de jogos ganhos/perdidos. <br>Faz <a class="address" href="login.html">Login</a> Já!</p>
    <!-- Features Section -->
    <div style="padding-top:25px;" class="row">
      <div class="col-lg-6">
        <h2 style="padding-bottom:10px;">Funcionalidades CounterStats</h2>
        <p>Aqui poderá ter uma perspetiva de como está o seu jogo utilizando estas funcionalidades</p>
        <ul>
          <li>Consulta das suas estatisticas</li>
          <li>Consultar os seus melhores resultados</li>
          <li>Consultar quem tem os melhores KDR/ADR</li>
          <li>Poderá ter acesso a algumas dicas para melhorar o seu estilo de jogo</li>
        </ul>
        <p>Todos os resultados que introduzir irão ser revistos por nós sendo que iremos sendo que só irão contar para  as suas médias depois de serem revistos por um dos nossos moderadores.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="images/intro.png" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>
  </div>
  <!-- /.container -->

  <!-- Footer -->
<?php include 'includes/footer.html'?>
