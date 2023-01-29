<?php
include('../../../app/sql_conection.php');
include('../../../app/app_vars.php');
include('../../../app/bootstrap.php');

$cpf = mysqli_real_escape_string($conn, trim($_POST['cpf']));
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conn, trim($_POST['sobrenome']));
$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));


$sql = "select count(*) as total from usuarios where cpf = '$cpf'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	 echo "<script>alert('CPF já cadastrado no nosso sistema, tente novamente!');</script>";
        echo "<script>window.location.href='cadastroteste.php';</script>";
}

$sql = "INSERT INTO usuarios (cpf, nome, sobrenome, email, senha) VALUES ('$cpf', '$nome', '$sobrenome', '$email', '$senha')";

if($conn->query($sql) === TRUE) {
	echo "<script>alert('Cadastro realizado com sucesso!');</script>";
        echo "<script>window.location.href='../../../';</script>";
	
}

	$conn->close();
     exit;




?>