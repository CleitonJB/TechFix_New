
<?php

	$con = mysqli_connect('127.0.0.1','root', 'root');
	
	if(!$con)
	{
		echo 'erro';
	}
	
	if(!mysqli_select_db($con, 'Tech'))
	{
		echo 'Banco de dados não foi encontrado';
	}
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	
	
	
	
	$sql = "INSERT INTO usuario(nome, email, senha, cpf, rg, estado, cidade) VALUES ('$nome', '$email', '$senha', '$cpf', '$rg', '$estado', '$cidade')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'cadastro não realizado';
	}
	else 
	{
		echo 'Cadastro realizado'; 

		header("Location: Perfil.php");
	}
	
?>
