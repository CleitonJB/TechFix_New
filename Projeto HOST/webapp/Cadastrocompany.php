
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
	$cnpj = $_POST['cnpj'];
	$endereco = $_POST['endereco'];
	
	
	
	
	$sql = "INSERT INTO empresa(nome, email, senha, cnpj, endereco) VALUES ('$nome', '$email', '$senha', '$cnpj', '$endereco')";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'cadastro não realizado';
	}
	else 
	{
		echo 'Cadastro realizado';

		header("Location: PerfilEmpresa.php");
	}
	
?>
