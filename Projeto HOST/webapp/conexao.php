<?php
	$conectar = mysqli_connect('localhost','root', 'root');
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
