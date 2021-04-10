<?php
if ((!(isset($_SESSION['erro'])))){
	$_SESSION['erro'] = false;
}

if (!(isset($_SESSION['started'])))
{
	$_SESSION['erro'] = true;
	header('location:login.php');
}


if (isset($_POST['registar']))
{
	$datajogo = $_POST['djogo'];
  $kills = $_POST['kills'];
  $deaths = $_POST['deaths'];
  $assists = $_POST['assists'];
  $kdr = $_POST['kdr'];
	$jogo = new Jogo();
  $jogo->setDatajogo($datajogo);
	$jogo->setKill($kills);
  $jogo->setDeath($deaths);
  $jogo->setAssist($assists);
  $jogo->setKdr($kdr);
	print_r($jogo);
	$return = $jogo->inserir();

	// if (count($return) > 0) {
	// 		//header('location:index.php');
	// }
}
?>
