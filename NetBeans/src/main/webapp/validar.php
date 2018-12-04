<html>
<head><title>Sistema de comentário =D</title>
<!-- <script>alert("será?")</script> -->
</head>
<body>
teoricamente foi... <br>
<?php 

	require('conexao.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$comentario = $_POST['comentario'];


	if(empty($nome)){
		echo '<script>alert("Atenção! O campo nome não pode ficar vazio.")</script>';
	} else if(empty($email)){
		echo '<script>';
		echo 'alert("Atenção! O campo email não pode ficar vazio.")';
		echo '</script>';
	} else if(empty($comentario)){
		echo '<script>';
		echo 'alert("Atenção! O campo comentario não pode ficar vazio.")';
		echo '</script>';
	}
?>
</body>
</html>