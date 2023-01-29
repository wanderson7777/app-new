<?php

	$query = "SELECT * FROM config";
	$result_query = mysqli_query($conn, $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );
	while ($row = mysqli_fetch_array( $result_query )) { 
	
	$name = $row['app_nome'];
	$logo = $row['logo'];

	}

	$app_name = $name;
	$app_logo = $logo;

?>

<title><?php echo $page_name . '  ' . $app_name ?></title>

<style>body{ margin: 0px !important; font-family: Poppins !important; }</style>

<style>@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');</style>