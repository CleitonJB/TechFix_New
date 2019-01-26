<?php  
	$server = "localhost";
	$usuario = "root";
	$senha = "root";
	$banco = "Tech";

	// Create connection
	$conn = new mysqli($server, $usuario, $senha, $banco);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>
<?php

	$sql = "SELECT nome, email, comentario FROM comentarios";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<div class=\"Bloco\">" . "<div class=\"NomeEmail\">" . "<div class=\"Nome\">" . $row["nome"] . "</div>" . " - " . "<div class=\"Email\">" . $row["email"]. "</div>" . "</div>" . "<br>" . "<div class=\"Comentario\">" . "&nbsp" . "&nbsp" . "&nbsp" . $row["comentario"]. "</div>" . "<br>" . "<br>" . "</div>";
	        echo "<hr>";
	    }
	} else {
	    echo "Nomes: 0";
	    echo "Emails: 0";
	    echo "Comentários: 0";
	}
	$conn->close();
?>

<style type="text/css">
	body{
		background: #DFDFDE;
	}

	.Nome{
		color: #1CCA96;
		margin-right: 10px;
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