<?php
if (isset($_SESSION['started']))
{
	if ($_SESSION['started'])
	{

			header('location:index.php');
	}
}
if (!(isset($erro))){
	$erro = false;
}

if (isset($_POST['LOGIN']))
{
	$email = $_POST['email'];
	$password =  $_POST['password'];

	$utilizador = new Utilizador();
	$utilizador->setEmail($email);
	$utilizador->setPassword($password);

	$return = $utilizador->login();
	if (count($return) > 0) {
		$_SESSION['login'] = $return[0];
		//$username = $return['nome'];
		$_SESSION['started'] = true;
		header('location:index.php');
		//print_r($return);
		//print_r($username);
	}else {
		// code..
		$erro = true;
		//header('location:login.php');
	}
}

?>
