<?php
if ((!(isset($_SESSION['erro'])))){
	$_SESSION['erro'] = false;
}
if (!(isset($_SESSION['started'])))
{
	$_SESSION['erro'] = true;
	header('location:login.php');
}

if (isset($_GET['action'])){
	if ($_GET['action'] == 'delete') {

		$id = $_GET['id'];

		$jogo = new Jogo();
		$jogo->setID($id);

		$return = $jogo->apagar();
	}
}

$jogo = new Jogo();
$jogo = $jogo->list();
?>
