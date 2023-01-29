<!------------ init includes ----------->
<?php include('./app/sql_conection.php'); ?>
<?php include('./app/app_vars.php'); ?>
<?php include('./app/bootstrap.php'); ?>
<!----------- finish includes ---------->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/css/login.css">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/fav/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/fav/site.webmanifest">
	<!-- <meta http-equiv="refresh" content="0"> -->
</head>
<body>
	<div class="box_login">
		<div class="container">
			<div class="row">
				<center>
					<img class="logo" src=<?php echo $app_logo ?>
				</center>
			</div>
			<div class="row">
				<center><h1>Faça Login</h1></center>
				<form action="./pages/auth/verify/" method="POST">
					<label class="description">Insira apenas números, ex: 12345678910</label>
					<input placeholder="Insira o seu CPF" type="cpf" name="cpf"><br>
					<input placeholder="Insira a sua senha..." type="password" name="senha"><br>
					<button name="entrar">Entrar</button>
				</form>
			</div>
			<div class="row">
				<div class="col-6">
					<a href="./pages/auth/primeiro-acesso/cadastroteste.php"><label style="float: left;" class="bottom_titles">Primeiro Acesso?</label></a>
				</div>
				<div class="col-6">
					<label style="float: right;" class="bottom_titles">Recuperar senha</label>
				</div>
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