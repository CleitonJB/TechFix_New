<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
	    <title>TechFix - Forúm</title>

	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
	    <link href="css/flexslider.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">


	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	      <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	      <![endif]-->
	      <link rel="shortcut icon" href="LogoMarca/22520889_1442280212_1920.ico" type="image/x-icon">
	      <link href="css/Forum.css" rel="stylesheet">

  	</head>
	<body>

		<!-- Header -->
	  	<div class="tm-header">
	  		<div class="container">
	  			<div class="row">
	  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
	  					<img style="position: relative; bottom: 15px;" onclick="location='Index.php'" class="LogoMarca" src="LogoMarca/LogoMarca.png" title="Seja Bem-vindo(a) ao TechFix!"> 
	  				</div>
		  			<div class="col-lg-6 col-md-8 col-sm-9">
		  				<div class="mobile-menu-icon">
			              <i class="fa fa-bars"></i>
			            </div>
		  				<nav class="tm-nav" style="width: 700px">
							<ul>
								<li><a href="Index.php" class="active">Menu</a></li>
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

	    <!-- Menu lateral com as empresas por região -->
	    <div class="MenuLateral">
	    	<aside> 
		      <dl>
		      	<dt>Empresas</dt>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Acre</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Alagoas</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Amapá</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Amazonas</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Bahia</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Ceará</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Distrito Federal</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Espírito Santo</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Goiás</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Maranhão</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Mato Grosso</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Mato Grosso do Sul</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Minas Gerais</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Pará</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Paraíba</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Paraná</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Pernambuco</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Piauí</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Rio de Janeiro</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Rio Grande do Norte</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Rio Grande do Sul</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Rondônia</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Roraima</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Santa Catarina</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp São Paulo</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Sergipe</dd>
		          <dd onclick="window.open('Index.php')">&nbsp &nbsp Tocantins</dd>
		      </dl>
		    </aside>
	    </div>

    	<div class="CampoComentarios">
			<form class="Formulario" method="post" action="validar.php">
				<center><h2 style="font-family: "Arial, Helvetica, sans-serif;">Reclamação</h2></center>
				<div class="Campos">
					<label>Nome:</label> <br>
					<input type="text" name="nome" required autocomplete="off"/>
				</div>

				<div class="Campos">
					<label>Email:</label> <br>
					<input type="text" name="email" required autocomplete="off"/>
				</div>

				<div class="Campos">
					<label>Comentário:</label> <br>
					<textarea cols="45" rows="7" name="comentario" required autocomplete="off"></textarea>
				</div>

				<div class="Botoes">
					<input type="submit" value="Enviar" />
					<input type="reset" value="Limpar" />
				</div>
			</form>
		</div>

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
			    echo "Nenhum comentário encontrado! :)";
			}
			$conn->close();
		?>
      </body>
  </html>