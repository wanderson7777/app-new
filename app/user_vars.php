<?php 

    session_start();

	$cpf_session = $_SESSION['cpf'];

	$query = "SELECT * FROM usuarios WHERE cpf='$cpf_session'";
	$result_query = mysqli_query($conn, $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );
	while ($row = mysqli_fetch_array( $result_query )) { 
	
	$ID = $row['ID'];
	$nome = $row['nome'];
	$sobrenome = $row['sobrenome'];
	$balance = $row['saldo'];
	$cpf = $row['cpf'];
	$daily_limit = $row['daily_limit'];
	$days_on = $row['days_on'];
	$actualizated_in = $row['actualizated_in'];

	}

	$query = "SELECT objetivo,default_daily_limit FROM config";
	$result_query = mysqli_query($conn, $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );
	while ($row = mysqli_fetch_array( $result_query )) { 
	
	$objetivo = $row['objetivo'];
    $default_daily_limit = $row['default_daily_limit'];
	}

	$user_id = $ID;
	$user_name = $nome;
	$user_lastName = $sobrenome;
	$user_cpf = $cpf;
	$user_balance = $balance;
	$user_objective = $objetivo;
	$dias_ativos = $days_on;
	$atualizado_em = $actualizated_in;
	$daily_limit = $daily_limit;

	if ($atualizado_em < date('Y-m-d')) {
		
		$today = date('Y-m-d');
		$sql = "UPDATE usuarios SET actualizated_in='$today',daily_limit='$default_daily_limit'  WHERE cpf = '$cpf'";
		if ($conn->query($sql) === TRUE) {

			$diamore = $dias_ativos + 1;
			$sql = "UPDATE usuarios SET days_on='$diamore' WHERE cpf = '$cpf'";
			if ($conn->query($sql) === TRUE) {}
		}

	}

// 	if ($dias_ativos < 7) {
// 		$daily_limit = 75;
// 		$sql_daily = "UPDATE usuarios SET daily_limit='$daily_limit' WHERE cpf = '$cpf'";
// 		if ($conn->query($sql_daily) === TRUE) {}
// 	}elseif ($dias_ativos < 14) {
// 		$daily_limit = 50;
// 		$sql_daily = "UPDATE usuarios SET daily_limit='$daily_limit' WHERE cpf = '$cpf'";
// 		if ($conn->query($sql_daily) === TRUE) {}
// 	}elseif ($dias_ativos < 21) {
// 		$daily_limit = 25;
// 		$sql_daily = "UPDATE usuarios SET daily_limit='$daily_limit' WHERE cpf = '$cpf'";
// 		if ($conn->query($sql_daily) === TRUE) {}
// 	}elseif ($dias_ativos < 28) {
// 		$daily_limit = 15;
// 		$sql_daily = "UPDATE usuarios SET daily_limit='$daily_limit' WHERE cpf = '$cpf'";
// 		if ($conn->query($sql_daily) === TRUE) {}
// 	}

 ?>