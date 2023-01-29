<?php 

	include('../../../../app/sql_conection.php');

	session_start();
	$cpf = $_SESSION['cpf'];
	$senha = md5($_REQUEST['password']);
	$senha_repeat = md5($_REQUEST['password_repeat']);

	if ($senha == $senha_repeat) {
		
		$sql = "UPDATE usuarios SET senha='$senha' WHERE cpf = '$cpf'";

		if ($conn->query($sql) === TRUE) {
			session_destroy();
		 	echo '<script>window.location.href = "../../../../";</script>';
		} else {
			session_destroy();
		 	echo '<script>window.location.href = "../../../../";</script>';
		}	
	}else{
		echo "<script>alert('Senhas não conferem!');</script>";
		echo "<script>window.location.href = './'</script>";
	}

 ?>