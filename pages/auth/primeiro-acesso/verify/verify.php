<?php 

	session_start();
	$code = $_REQUEST['code'];
	$code_session = $_SESSION['code_rand'];

	if ($code == $code_session) {
		$_SESSION['code_auth'] = rand(100000, 999999);
		header('Location: ../alterar-senha/');
	}else{
        echo "<script>alert('Código incorreto!');</script>";
		echo "<script>window.location.href = './'</script>";
	}

 ?>