<!------------ init includes ----------->
<?php $page_name = 'Login'; ?>
<?php include('../../../../app/sql_conection.php'); ?>
<?php include('../../../../app/app_vars.php'); ?>
<?php include('../../../../app/bootstrap.php'); ?>
<!----------- finish includes ---------->

<?php session_start(); if(empty($_SESSION['code_auth'])){header('Location: www.google.com');} ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<!-- <meta http-equiv="refresh" content="0"> -->
</head>
<body>
	<div class="box_login">
		<div class="container">
			<div class="row">
				<center>
					<img class="logo" src="https://i.pinimg.com/originals/6a/42/04/6a4204f04496559aa27101d25983d0f0.png">
				</center>
			</div>
			<div class="row">
				<center><h1>Escolha a sua Senha:</h1></center>
				<p style="font-weight: 300; font-size: 10px; text-align: center;">Lembre-se de escolher algo seguro, diferente de datas de nascimento, nomes ou sobrenome e etc...</p>
				<form action="./verify.php" method="POST">
					<input placeholder="Insira a senha..." type="password" name="password"><br>
					<input placeholder="Repita a senha..." type="password" name="password_repeat"><br>
					<button name="entrar">Enviar</button>
				</form>
			</div>
			<div class="row">
			</div>
			<div style="margin-top: 50px;" class="row">
				<div class="col-sm">
					<center>
						<label style="margin: 5px !important; color: #666;" class="description">Políticas de Privacidade</label>
							<br>
						<label style="margin: 5px !important; color: #666;" class="description">Termos de Uso</label>
					</center>
				</div>
			</div>
		</div>
	</div>
</body>
</html>