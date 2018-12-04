<?php

	$conectar = mysql_connect(‘localhost’,’root’,’root‘) or die (“Erro ao se conectar com o servidor ” . mysql_error());
	$banco = mysql_select_db(‘Tech’) or die (“Erro ao se conectar com o banco de dados ” . mysql_error());

	$tabela = mysql_query(“SELECT * FROM comentarios ORDER BY id DESC”); 
	$exibir = mysql_fetch_array($tabela);

	$inserir = mysql_query(“INSERT INTO comentarios (nome, email, comentario) VALUES (‘$nome’, ‘$email’, ‘$comentario’)”);
	echo “<script>alert(‘Dados enviados com sucesso!)</script>”;
	echo ‘<script>history.back();</script>’;

	while($exibir = mysql_fetch_array($tabela)){
		echo $exibir[‘nome’] . “<br />”;
		echo $exibir[‘email’] . “<br />”;
		echo $exibir[‘comentario’] . “<hr />”;
	}
?>