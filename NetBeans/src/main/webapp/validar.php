<!-- Está cadastrando, mas tenho que ver porque informa que não cadastrou -->

<html>
<meta charset="utf-8">
	<head><title>Sistema de comentário =D</title>
	</head>
	<body>
		teoricamente foi... <br>
		<?php 

			require('conexao.php');

			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$comentario = $_POST['comentario'];

			//Só cadastrar se os campos nome, email e comentário não forem vazios
			if($nome == ''){
				echo '<script>alert("Atenção! O campo nome não pode ficar vazio.")</script>';
			} else if($email == ''){
				echo '<script>alert("Atenção! O campo email não pode ficar vazio.")</script>';
			} else if($comentario == ''){
				echo '<script>alert("Atenção! O campo comentario não pode ficar vazio.")</script>';
			}else if ($nome != '' && $email != '' && $comentario != '') {
				$tabela = mysqli_query($conectar, "INSERT INTO comentarios (nome, email, comentario) VALUES ('$nome','$email','$comentario')");

				header("Location: index.php");
				echo '<script>alert("Comentário cadastrado")</script>'; 

			}else{
				echo '<script>alert("Comentário não cadastrado")</script>';
			}
		?>

		<!-- https://www.youtube.com/watch?v=IHdd02IK2Jg  Mostrar informações do banco de dados na tela -->
	</body>
</html>