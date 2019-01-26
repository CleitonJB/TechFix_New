<?php
	$conectar = mysqli_connect('127.0.0.1','root', 'root');
	$banco = mysqli_select_db($conectar, "Tech");

	if(!$conectar)
	{
		echo '<script>alert("erro")</script>';
	}
	
	if(!mysqli_select_db($conectar, 'Tech'))
	{
		echo '<script>alert("Banco de dados não foi encontrado")</script>';
	}
	
?>
