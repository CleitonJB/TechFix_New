<html>
<meta charset="utf-8">
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

			//Só cadastrar se os campos nome, email e comentário não forem vazios
			if($nome == ''){
				echo '<script>alert("Atenção! O campo nome não pode ficar vazio.")</script>';
			} else if($email == ''){
				echo '<script>alert("Atenção! O campo email não pode ficar vazio.")</script>';
			} else if($comentario == ''){
				echo '<script>alert("Atenção! O campo comentario não pode ficar vazio.")</script>';
			}else if ($nome != '' && $email != '' && $comentario != '') {
				$tabela = mysqli_query($conectar, "INSERT INTO comentarios (nome, email, comentario) VALUES ('$nome','$email','$comentario')");
			}

			/*Mostrar os comentários na tela (gambiarra organizada)
			$sql = "SELECT * FROM comentarios";
			$records = mysqli_query($sql);

			while ($employee = mysqli_fetch_assoc($records)) {
				echo $employee['nome'];
				echo $employee['email'];
				echo $employee['comentario'];
			}
			*/

			if(!mysqli_query($conectar, $tabela))
			{
				echo '<script>alert("Comentário não cadastrado")</script>';
			}
			else 
			{
				echo '<script>alert("Comentário cadastrado")</script>'; 

				header("Location: Index.html");
			}
		?>

		<!-- https://www.youtube.com/watch?v=IHdd02IK2Jg  Mostrar informações do banco de dados na tela -->
	</body>
</html>