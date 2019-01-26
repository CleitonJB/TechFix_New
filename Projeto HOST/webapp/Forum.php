<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>TechFix - Forum</title>
		<link rel="stylesheet" type="text/css" href="css/Comentarios.css">
		<link rel="shortcut icon" href="LogoMarca/Icone.png" type="image/x-icon">

		<link href="css/font-awesome.min.css" rel="stylesheet">
	  	<link href="css/bootstrap.min.css" rel="stylesheet">
	  	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
	  	<link href="css/flexslider.css" rel="stylesheet">
	  	<link href="css/templatemo-style.css" rel="stylesheet">
	</head>
	<body>

		<!-- Header -->
	  	<div class="tm-header">
	  		<div class="container">
	  			<div class="row">
	  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
	  					<img onclick="window.open('index.php', '_self');" class="LogoMarca" src="LogoMarca/LogoMarca.png" title="Seja Bem-vindo(a) ao TechFix!">
	  				</div>
		  			<div class="col-lg-6 col-md-8 col-sm-9">
		  				<div class="mobile-menu-icon">
			              <i class="fa fa-bars"></i>
			            </div>
		  				<nav class="tm-nav" style="width: 700px">
							<ul>
								<li><a href="index.php" class="active">Menu</a></li>
								<li><a href="Sobre.html">Sobre</a></li>
								<li><a href="Empresas.html">Empresas</a></li>
								<li><a href="Login.php">Login</a></li>
								<li><a href="Cadastro.php">Cadastro</a></li>
							</ul>
						</nav>		
		  			</div>				
	  			</div>
	  		</div>	  	
	  	</div>

		<!-- Link de tutorial que não lembro: https://inatitude.wordpress.com/2010/12/06/tutorial-php-sistema-de-comentarios/ -->
		<center>

			<div class="CampoComentarios" style="width: 370px; height: 440px; margin-top: 20px; border: 1px solid #FCDD44;">
				<form class="Formulario" method="post" action="validar.php">
					<center><h2 style="color: white; font-family: "Arial, Helvetica, sans-serif;">Reclamação</h2></center>
					<div class="Campos">
						<label style="float: left;">Nome:</label> <br>
						<input style="border: 1px solid #FCDD44;" type="text" name="nome" required autocomplete="off"/>
					</div>

					<div class="Campos">
						<label style="float: left;">Email:</label> <br>
						<input style="border: 1px solid #FCDD44;" type="text" name="email" required autocomplete="off"/>
					</div>

					<div class="Campos">
						<label style="float: left;">Comentário:</label> <br>
						<textarea style="border: 1px solid #FCDD44;" cols="45" rows="7" name="comentario" required autocomplete="off"></textarea>
					</div>

					<div class="Botoes">
						<input style="color: white; float: left; border: 1px solid #FCDD44;" type="submit" value="Enviar" />
						<input style="color: white; float: right; border: 1px solid #FCDD44;" type="reset" value="Limpar" />
					</div>
				</form>
			</div>
		</center>

		<?php  
			$server = "localhost";
			$usuario = "root";
			$senha = "";
			$banco = "tech";

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
			        echo "<hr>";
			        echo "<div class=\"Bloco\">";
				        echo "<div class=\"NomeEmail\">";
					        echo "<div class=\"Nome\">";
					        	echo $row["nome"] . " - ";
					        echo "</div>";
					        echo "<div class=\"Email\">";
					        	echo $row["email"];
					        echo "</div>";
					    echo "</div>";
				        echo "</br>";
				        echo "<div class=\"Comentario\">";
					        echo "&nbsp" . "&nbsp" . "&nbsp"; 
					        echo $row["comentario"]; 
					    echo "</div>";
				    echo "</div>";
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
				color: #FCDD44;
				margin-right: 10px;
			}

			.Email{
				position: relative;
				top: 2px;
				font-size: 12px;
				margin-left: 10px;
				color: white;
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
			    margin-top: 15px;
			    margin-bottom: 15px;
			    margin-left: 200px;
			    padding: 10px;
			    background-color: black;
			    border: 1px solid #FCDD44;
			    width: 900px;
			    color: #000000;
			    box-shadow: 6px 4px 12px black;
			    overflow-y: scroll;
			    height: 100px;
			    max-height: 100px;
			}
		</style>
	</body>
</html>