

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" role="navigation">
  <div class="container">
      <a class="navbar-brand" href="index.php"><img class="icon" src="images\icons\icon.png"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
          &#9776;
      </button>
      <div class="collapse navbar-collapse" id="exCollapsingNavbar">
          <ul class="nav navbar-nav">
              <li class="nav-item"><a href="tips.php" class="nav-link">Tips</a></li>
              <li class="nav-item"><a href="ranks.php" class="nav-link">Ranks</a></li>
              <li class="nav-item"><a href="rankingkdr.php" class="nav-link">Melhores kdr's</a></li>
          </ul>
          <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
              <li class="nav-item dropdown">
                  <?php
                  if (isset($_SESSION['started']))
                  {
                  	if ($_SESSION['started'])
                  	{
                      echo '<a class="nav-link dropdown-toggle id="navbarDropdownBlog data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['login']['nome'].'</a>';
                    }
                  ?>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                    <a class="dropdown-item" href="profile.php">Perfil</a>
                    <a class="dropdown-item" href="jogos.php">Meus Jogos</a>
                     <?php
                     if ($_SESSION['login']['codtipo'] == 1){
                        echo '<a class="dropdown-item" href="user-list.php">Lista de Utilizadores</a>';
                      }
                    ?>
                    <a class="dropdown-item" href="logout.php">Log Out</a>
                  </div>
                  <?php
                    } else {
                  ?>
                    <a class="btn btn-outline-secondary" href="login.php">Login</a>
                    <a class="btn btn-outline-secondary" href="registar.php">Registar</a>
                  <?php
                }
                  ?>

              </li>
          </ul>
      </div>
  </div>
</nav>
