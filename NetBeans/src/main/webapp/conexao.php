<?php
	$conectar = mysqli_connect('127.0.0.1','root', 'root') or die ("Erro ao se conectar com o servidor " . mysql_error());
	$banco = mysqli_select_db($conectar, "Tech") or die ("Erro ao se conectar com o banco de dados " . mysql_error());
?>
