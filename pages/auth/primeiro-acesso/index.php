<!------------ init includes ----------->
<?php $page_name = 'Login'; ?>
<?php include('../../../app/sql_conection.php'); ?>
<?php include('../../../app/app_vars.php'); ?>
<?php include('../../../app/bootstrap.php'); ?>
<!----------- finish includes ---------->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
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
				<center><h1>Primeiro Acesso?</h1></center>
				<form action="./verify_cpf.php" method="POST">
					<label class="description">Insira apenas números, ex: 12345678910</label>
					<input placeholder="Insira o seu CPF" type="cpf" name="cpf"><br>
					<button name="entrar">Próximo</button>
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