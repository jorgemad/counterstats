<?php
if ((!(isset($_SESSION['erro'])))){
	$_SESSION['erro'] = false;
}
if (!(isset($_SESSION['started'])))
{
	$_SESSION['erro'] = true;
	header('location:login.php');
}

if ($_SESSION['login']['codtipo'] == 2){
	$_SESSION['erro'] = true;
	header('location:index.php');
}

if (isset($_GET['action'])){
	if ($_GET['action'] == 'delete') {

		$id = $_GET['id'];

		$utilizador = new Utilizador();
		$utilizador->setID($id);

		$return = $utilizador->apagar();
	}
}

$utilizador = new Utilizador();
$utilizador = $utilizador->list();
?>
