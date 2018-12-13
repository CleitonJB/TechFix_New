<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sistema de comentário</title>
		<link rel="stylesheet" type="text/css" href="css/Comentarios.css">
	</head>
	<body>
		<!-- Link de tutorial que não lembro: https://inatitude.wordpress.com/2010/12/06/tutorial-php-sistema-de-comentarios/ -->
		<h1>Digite seu comentário - Funciona criatura divina</h1>

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
	</body>
</html>