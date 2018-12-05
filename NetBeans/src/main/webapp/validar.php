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
				echo '<script>alert("Atenção! O campo email não pode ficar vazio.")</script>';
			} else if(empty($comentario)){
				echo '<script>alert("Atenção! O campo comentario não pode ficar vazio.")</script>';
			}

			$tabela = mysqli_query($conectar, "SELECT * FROM comentarios ORDER BY id DESC");
			$tabela = mysqli_query($conectar, "INSERT INTO comentarios (nome, email, comentario) VALUES ('$nome','$email','$comentario')");
			$exibir = mysqli_fetch_array($tabela);
				while($exibir = mysqli_fetch_array($tabela)){
					echo $exibir['nome'];
					echo $exibir['email'];
					echo $exibir['comentario'];
				}

				if(!mysqli_query($conectar,$tabela))
				{
					echo 'cadastro não realizado';
				}
				else 
				{
					echo 'Cadastro realizado'; 

					header("Location: Index.php");
				}
		?>
	</body>
</html>