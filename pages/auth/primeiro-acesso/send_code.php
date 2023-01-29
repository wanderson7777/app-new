<?php

	USE PHPMailer\PHPMailer\PHPMailer;
	if(empty(session_start())){session_start();}
	include('../../../app/sql_conection.php');
	include('../../../app/app_vars.php');
	include('../../../app/mail_vars.php');

	$cpf = $_SESSION['cpf'];
	$query = "SELECT * FROM usuarios WHERE cpf = '$cpf'";
	if (mysqli_query($conn, $query)) {
		$dados = mysqli_query($conn, $query) or die(mysql_error());
		$linha = mysqli_fetch_assoc($dados);
		$ID = $linha['ID'];
		$client_name = $linha['nome'];
		$email_client = $linha['email'];
		$code = rand(100000, 999999);

			require '../../../vendor/autoload.php';
			    $mail = new PHPMailer;
			    $mail->isSMTP();
			    $mail->Host = $email_host;
			    $mail->Port = $email_port ;
			    $mail->SMTPAuth = true;
			    $mail->Username = $email_username;
			    $mail->Password = $email_password;
			    $mail->setFrom($email_username, $email_sender);
			    $mail->addAddress($email_client, $client_name);
			    if ($mail->addReplyTo($email_client, $client_name)) {
			        $mail->Subject = utf8_decode('Código de acesso'.' '.$app_name.'!');
			        $mail->isHTML(false);
			        $mail->Body = utf8_decode('O seu código de acesso é: '.$code.'!');
			        if (!$mail->send()) {
			            echo "<script>alert('Erro ao enviar código!');</script>";
		    			echo "<script>window.location.href = './'</script>";
			        } else {
			        	$_SESSION['recovery'] = $cpf;
			        	$_SESSION['code_rand'] = $code;
		    			echo "<script>window.location.href = './verify/'</script>";
			        }
			    } else {
			        echo "<script>alert('Erro ao enviar código!');</script>";
	    			echo "<script>window.location.href = './'</script>";
			    }
	}else{
		echo "<script>alert('Usuário não encontrado!');</script>";
	    echo "<script>window.location.href = './'</script>";
	}

?>