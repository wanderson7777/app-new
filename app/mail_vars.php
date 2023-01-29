<?php 

	include_once('sql_conection.php');

	$cpf = @$_SESSION['cpf'];

	$query_email = "SELECT * FROM config";
	$dados_email = mysqli_query($conn, $query_email) or die(mysql_error());
	$email = mysqli_fetch_assoc($dados_email);

	// clients vars
	$email_host = $email['email_host'];
	$email_port = $email['email_port'];
	$email_username = $email['email_username'];
	$email_password = $email['email_password'];
	$email_sender = $email['app_nome'];

 ?>