<!DOCTYPE html>
<html>
	<head>
		<title> Comentários </title>
	</head>
	<body>
		<?php  
			$server = "localhost";
			$usuario = "root";
			$senha = "root";
			$banco = "Tech";

			// Criando conexão com o banco de dados
			$conn = new mysqli($server, $usuario, $senha, $banco);
			// Checando a conexão com o banco de dados
			if ($conn->connect_error) {
			    die("Erro na conexão: " . $conn->connect_error);
			}
		?>

		<?php

			$sql = "SELECT nome, email, comentario FROM comentarios";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // Mostrar todos comentários existentes no banco de dados
			    while($row = $result->fetch_assoc()) {
			    	// TENHO QUE ORGANIZAR ESSA BAGUNÇA PORQUE ESTÁ HORRÍVEL DE VER E MODIFICAR
			        echo "<div class=\"Bloco\">" . "<div class=\"NomeEmail\">" . "<div class=\"Nome\">" . $row["nome"] . "</div>" . " - " . "<div class=\"Email\">" . $row["email"]. "</div>" . "</div>" . "<br>" . "<div class=\"Comentario\">" . "&nbsp" . "&nbsp" . "&nbsp" . $row["comentario"]. "</div>" . "<br>" . "<br>" . "</div>";
			        echo "<hr>";
			    }
			} else {
			    echo "Nenhum comentário encontrado! :)";
			}
			$conn->close();
		?>

		<!-- CSSzinho dos comentários. Bagunçado, porém, funcional -->
		<style type="text/css">
			body{
				background: #DFDFDE; /* Remover quando por no projeto principal. O mesmo já possuí um background definido */
			}

			.Nome{
				color: #1CCA96;
				margin-right: 10px;
				text-shadow: 1px 2px 2px gray;
			}

			.Email{
				position: relative;
				top: 2px;
				font-size: 12px;
				margin-left: 10px;
			}

			.NomeEmail{
				display: flex;
				flex-direction: horizontal;
			}

			.Comentario{
				font-size: 14px;
				color: gray;
			}

			.Bloco {
				border-radius: 15px;
			    margin-top: 10px;
			    padding: 10px;
			    background-color: white;
			    border: 1px solid #1CCA96;
			    width: 900px;
			    color: #000000;
			    box-shadow: 6px 4px 12px black;
			    overflow-y: scroll;
			    max-height: 90px;
			}
		</style>
	</body>
</html>