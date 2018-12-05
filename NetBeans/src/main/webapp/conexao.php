<?php
	$conectar = mysqli_connect('127.0.0.1','root', 'root');
	$banco = mysqli_select_db($conectar, "Tech");

	if(!$conectar)
	{
		echo 'erro';
	}
	
	if(!mysqli_select_db($conectar, 'Tech'))
	{
		echo 'Banco de dados não foi encontrado';
	}
	
?>
