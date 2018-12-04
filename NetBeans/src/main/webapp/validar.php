<<?php 
	require(‘conexao.php’);

	$nome = $_POST[‘nome’];
	$email = $_POST[‘email’];
	$comentario = $_POST[‘comentario’];

	if(empty($nome)){
		echo “<script>alert(‘Atenção! O campo nome não pode ficar em branco. )</script>”;
		echo ‘<script>history.back();</script>’;
	} else if(empty($email)){
		echo “<script>alert(‘Atenção! O campo email não pode ficar em branco. )</script>”;
		echo ‘<script>history.back();</script>’;
	} else if(empty($comentario)){
		echo “<script>alert(‘Atenção! O campo comentario não pode ficar em branco. )</script>”;
		echo ‘<script>history.back();</script>’;
	} 
?>