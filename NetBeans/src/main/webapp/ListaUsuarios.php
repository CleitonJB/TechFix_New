<!DOCTYPE html>
<html>
	<head>
		<title></title>
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
			$sql = "SELECT nome, dt_nascimento, email, estado, cidade, cpf, rg, username FROM usuario";
			$result = $conn->query($sql);
			echo "<table>";
				echo "<tr>";
				    echo "<th>" . "Nome" . "</th>";
				    echo "<th>" . "Nascimento" . "</th>";
				    echo "<th>" . "Email" . "</th>";
				    echo "<th>" . "Estado" . "</th>";
				    echo "<th>" . "Cidade" . "</th>";
				    echo "<th>" . "CPF" . "</th>";
				    echo "<th>" . "RG" . "</th>";
				    echo "<th>" . "Username" . "</th>";
			  	echo "</tr>";
			echo "</table>";
			if ($result->num_rows > 0) {
			    // Mostrar todos comentários existentes no banco de dados
			    while($row = $result->fetch_assoc()) {
			    	
			        echo $row["nome"];
			        echo $row["dt_nascimento"];
			        echo $row["email"];
			        echo $row["estado"];
			        echo $row["cidade"];
			        echo $row["cpf"];
			        echo $row["rg"];
			        echo $row["username"];
			    }
			} else {
			    echo "Nenhum usuario encontrado @_@";
			}
			$conn->close();
		?>
	</body>
</html>