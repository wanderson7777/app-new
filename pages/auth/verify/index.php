<?php
	
	include('../../../app/sql_conection.php');

	$cpf = $_POST['cpf'];
	$entrar = $_POST['entrar'];
	$senha = md5($_POST['senha']);

	if (isset($entrar)) {

		$verifica = mysqli_query($conn, "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'") or die("erro ao selecionar");

		if (mysqli_num_rows($verifica)<=0){
		echo"<script language='javascript' type='text/javascript'>alert('cpf e/ou senha incorretos');window.location.href='../../../';</script>";
		die();

		}else{
		    session_start();
			$_SESSION['cpf'] = $cpf;
			echo '<script>window.location.href = "../../dashboard/"</script>';
		}
	}

?>