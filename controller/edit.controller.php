<?php
if ((!(isset($_SESSION['erro'])))){
	$_SESSION['erro'] = false;
}

if (!(isset($_SESSION['started'])))
{
	$_SESSION['erro'] = true;
	header('location:login.php');
}


$nome = '';
$email = '';
$steamuser = '';
$dnascimento = '';
$ranki = '';
$password = '';

if (isset($_GET['id']))
{
	$id = $_GET['id'];

	$utilizadorModel = new Utilizador();
	$utilizadorModel->setID($id);

	$utilizador = $utilizadorModel->getByID();

	$nome = $utilizador['nome'];
	$email = $utilizador['email'];
  $steamuser = $utilizador['steamuser'];
  $dnascimento = $utilizador['datanascimento'];
  $ranki = $utilizador['ranki'];
  $password = $utilizador['password'];
}

if (isset($_POST['gravar']))
{
	$id = $_SESSION['login']['codutilizador'];
	$nome =  replaceString($_POST['nome']);
	$email = replaceString($_POST['email']);
  $steamuser = replaceString($_POST['suser']);
  $dnascimento = replaceString($_POST['dnascimento']);
  $ranki = replaceString($_POST['rank']);
  $password = replaceString($_POST['psw']);


	$utilizador = new Utilizador();
	$utilizador->setID($id);
	$utilizador->setNome($nome);
	$utilizador->setEmail($email);
	$utilizador->setSuser($steamuser);
  $utilizador->setDnascimento($dnascimento);
  $utilizador->setranki($ranki);
  $utilizador->setPassword($password);
	$utilizador->editar();
}
?>
