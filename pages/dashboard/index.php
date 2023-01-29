<?php $page_name = 'App'; ?>
<?php session_start(); ?>
<?php include('../../app/protect.php'); ?>
<?php include('../../app/sql_conection.php'); ?>
<?php include('../../app/app_vars.php'); ?>
<?php include('../../app/user_vars.php'); ?>
<?php include('../../app/bootstrap.php'); ?>
<!----------- finish includes ---------->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/f2a65edaaa.js" crossorigin="anonymous"></script>
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/fav/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/fav/site.webmanifest">
	<!-- <meta http-equiv="refresh" content="0"> -->
</head>
<body>

	<!-- Modal Saque -->
	<div class="modal fade" id="modal_saque" tabindex="-1" aria-labelledby="modal_saqueLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modal_saqueLabel">Atenção! ⚠️</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <p style="font-weight: 300; line-height: 175% !important;" class="body_modal">Você deve completar a barra da meta para finalizar o seu saque! Ou aguardar até um colaborador do <?php echo $app_name ?> entrar em contato para um saque premiado!</p>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="container top">
		<div class="row">
			<div class="col-6">
				<a href="../auth/logout.php"><label class="name"><i class="fa-solid fa-arrow-right-from-bracket"></i>  Olá <?php echo $user_name ?></label></a>
			</div>
			<div class="col-6">
				<label class="balance" style="float: right;"><i class="fa-solid fa-bolt"></i> <span id="amount"> <?php echo number_format($user_balance,2,",","."); ?></span></label>
			</div>
		</div>
	</div>

	<div class="mid">
		<center>
			<img class="logo" src="<?php echo $app_logo ?>">
		</center>
		<div class="row">
			<div class="col-6">
				<label class="title_balance">
					<i class="fa-solid fa-bolt"></i>
					  
					 <?php echo number_format($user_balance,2,",","."); ?>
				</label>
			</div>
			<div class="col-6">
				<label style="float: right;" class="title_balance">
					<i class="fa-solid fa-bullseye"></i>
					  
					<?php echo number_format($user_objective,2,",","."); ?>
				</label>
			</div>
			<div class="row">
			</div>
		</div>

		<div class="row">
			<center>
				<progress id="file" value="<?php echo $user_balance ?>" max="<?php echo $user_objective ?>"></progress>
			</center>
		</div>
		<div class="row">
			<div class="col-sm">
				<form id="sacar" method="POST" action="../sacar/">
					<input value="<?php echo $user_balance ?>" type="hidden" name="user_balance">
					<input value="<?php echo $user_objective ?>" type="hidden" name="user_objective">
				</form>
				<button <?php if($user_balance < $user_objective){ echo 'data-bs-toggle="modal" data-bs-target="#modal_saque"'; }else{ echo 'form="sacar"'; } ?>>Quero sacar o meu Dinheiro</button>
			</div>
		</div>

		<div style="margin-top: 40px; margin-bottom: 30px;" class="row">
			<div class="col-sm">
				<center>
					<label class="title_balance">Qual ação deseja executar?</label>
					<div id="daily_limit_exceeded"></div>
				</center>
			</div>
		</div>

		<div class="row">

			<?php 

				$consulta = "SELECT * FROM redes_sociais";
				$con = $conn->query($consulta) or die($conn->error);

			?>

			<?php while($dado = $con->fetch_array()) { ?>

			<div class="col-6">
				<div class="item_social redeSocialLink" data-linkid="<?php echo $dado['ID']; ?>">
					<center>
				    	<?php echo $dado['icone']; ?>
    				    <?php echo $dado['nome']; ?>
					</center>
				</div>
			</div>

			<?php } ?>

		</div>

	</div>
<script src="../../assets/js/main.js"></script>
</body>
</html>