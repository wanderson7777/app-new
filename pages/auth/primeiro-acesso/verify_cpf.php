<?php

	include('../../../app/sql_conection.php');

	$cpf = $_POST['cpf'];
	$entrar = $_POST['entrar'];

	if (isset($entrar)) {

		$verifica = mysqli_query($conn, "SELECT * FROM usuarios WHERE cpf = '$cpf'") or die("erro ao selecionar");

		if (mysqli_num_rows($verifica)<=0){
			echo"<script language='javascript' type='text/javascript'>alert('CPF não consta em nossa base de dados!');window.location.href='./';</script>";
		die();

		}else{
			session_start();
			$_SESSION['cpf'] = $cpf;
			header("Location: ./send_code.php");
		}
	}

?>