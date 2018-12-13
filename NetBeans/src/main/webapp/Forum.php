<!-- https://www.oficinadanet.com.br/artigo/php/sistema_de_comentarios_php_-_mysql -->

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
	  					<a href="Index.html" class="tm-site-name">TECHFIX</a>	
	  				</div>
		  			<div class="col-lg-6 col-md-8 col-sm-9">
		  				<div class="mobile-menu-icon">
			              <i class="fa fa-bars"></i>
			            </div>
		  				<nav class="tm-nav" style="width: 700px">
							<ul>
								<li><a href="Index.html" class="active">Menu</a></li>
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
	    <aside class="MenuLateral"> 
	      <dl>
	        <dt>Empresas</dt>
	          <dd onclick="window.open('Index.html')">Acre</dd>
	          <dd onclick="window.open('Index.html')">Alagoas</dd>
	          <dd onclick="window.open('Index.html')">Amapá</dd>
	          <dd onclick="window.open('Index.html')">Amazonas</dd>
	          <dd onclick="window.open('Index.html')">Bahia</dd>
	          <dd onclick="window.open('Index.html')">Ceará</dd>
	          <dd onclick="window.open('Index.html')">Distrito Federal</dd>
	          <dd onclick="window.open('Index.html')">Espírito Santo</dd>
	          <dd onclick="window.open('Index.html')">Goiás</dd>
	          <dd onclick="window.open('Index.html')">Maranhão</dd>
	          <dd onclick="window.open('Index.html')">Mato Grosso</dd>
	          <dd onclick="window.open('Index.html')">Mato Grosso do Sul</dd>
	          <dd onclick="window.open('Index.html')">Minas Gerais</dd>
	          <dd onclick="window.open('Index.html')">Pará</dd>
	          <dd onclick="window.open('Index.html')">Paraíba</dd>
	          <dd onclick="window.open('Index.html')">Paraná</dd>
	          <dd onclick="window.open('Index.html')">Pernambuco</dd>
	          <dd onclick="window.open('Index.html')">Piauí</dd>
	          <dd onclick="window.open('Index.html')">Rio de Janeiro</dd>
	          <dd onclick="window.open('Index.html')">Rio Grande do Norte</dd>
	          <dd onclick="window.open('Index.html')">Rio Grande do Sul</dd>
	          <dd onclick="window.open('Index.html')">Rondônia</dd>
	          <dd onclick="window.open('Index.html')">Roraima</dd>
	          <dd onclick="window.open('Index.html')">Santa Catarina</dd>
	          <dd onclick="window.open('Index.html')">São Paulo</dd>
	          <dd onclick="window.open('Index.html')">Sergipe</dd>
	          <dd onclick="window.open('Index.html')">Tocantins</dd>
	      </dl>
	    </aside>

    	<div class="CampoComentarios">
			<form class="Formulario" method="post" action="validar.php">
				<center><h2 style="font-family: "Arial, Helvetica, sans-serif;">Comente</h2></center>
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
				color: white;
				display: flex;
				flex-direction: horizontal;
			}

			.Comentario{
				font-size: 14px;
				color: gray;
				max-height: 90px;
			}

			.Bloco {
				border-radius: 15px;
			    margin-top: 10px;
			    margin-left: 170px;
			    padding: 10px;
			    background-color: black;
			    border: 1px solid #1CCA96;
			    width: 900px;
			    color: #000000;
			    box-shadow: 6px 4px 12px black;
			    overflow-y: scroll;
			
			}
		</style>

    	<!-- <div class="TodosComentarios"> 

            <dl class="Topicos">
              <dd>Reclamação</dd>
                <dt>Pousou em meio às rochas. Suas asas se fecharam, seu corpo começava a se esfriar. O peso dos anos fazia suas penas se esfarelarem e sua chama amiudar. Percebeu que era a hora da partida. Olhou para o céu estrelado, morrer era uma das leis da natureza, mas nem por isso era algo bom. </dt>
            </dl>

            <dl class="Topicos">
              <dd>Solicitação</dd>
                <dt>Guinchou fracamente, seu fogo apagou, seu corpo caiu no chão e se transformou em cinzas negras.
                Após alguns segundos, as partículas das cinzas começaram a se agitar a ponto de queimarem. Juntaram-se em um redemoinho de fogo para formar um novo ser. Das chamas surgiu uma nova ave a piar sons melancólicos.</dt>
            </dl>

            <dl class="Topicos">
              <dd>Informação</dd>
                <dt>Sonhos, planos, objetivos feitos em delírios conjugais. Pensamentos que a realidade fez questão de mostrar que estavam errados. Tudo perfeitamente planejado, mas que não deixou de ser apenas um plano que não teve a oportunidade de sair do papel, pior, não teve  nem a oportunidade de sair das mentes juvenis apaixonadas para ir ao papel.</dt>
            </dl>

            <dl class="Topicos">
              <dd>Solicitação</dd>
                <dt>É comum eu ouvir de algumas mães que não vêem a hora do filho crescer e contar pra ela sobre a percepção de ouvir cada som com o IC, tal como eu faço. Ainda que...</dt>
            </dl>
            <dl class="Topicos">
              <dd>Debate</dd>
                <dt>Pousou em meio às rochas. Suas asas se fecharam, seu corpo começava a se esfriar. O peso dos anos fazia suas penas se esfarelarem e sua chama amiudar. Percebeu que era a hora da partida. Olhou para o céu estrelado, morrer era uma das leis da natureza, mas nem por isso era algo bom. </dt>
            </dl>
    	</div> -->
      </body>
  </html>