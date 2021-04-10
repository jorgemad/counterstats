<?php
if (isset($_SESSION['started']))
{
	if ($_SESSION['started'])
	{
		header('location:index.php');
	}
}


if (isset($_POST['registar']))
{
	$nome = $_POST['nome'];
  $email = $_POST['email'];
  $steamuser = $_POST['suser'];
  $dnascimento = $_POST['dnascimento'];
  $rank = $_POST['rank'];
	$password =  $_POST['psw'];

	$utilizador = new Utilizador();
  $utilizador->setNome($nome);
	$utilizador->setEmail($email);
  $utilizador->setSuser($steamuser);
  $utilizador->setDnascimento($dnascimento);
  $utilizador->setRanki($rank);
	$utilizador->setPassword($password);

	$return = $utilizador->registar();

	// if (count($return) > 0) {
	// 		//header('location:index.php');
	// }
}
?>
