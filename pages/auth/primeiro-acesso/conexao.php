<?php
define('HOST', 'localhost:3306');
define('USUARIO', 'sau09486_wtw');
define('SENHA', 'estudio@pride');
define('DB', 'sau09486_watchtowin');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>