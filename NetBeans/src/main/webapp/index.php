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
			<form class="Campos" method="post" action="validar.php">
				<div>
					<label>Nome:<span class="req">*</span></label>
					<input type="text" name="nome" value="Nome:" required autocomplete="off"/>
				</div>

				<div>
					<label>Email:<span class="req">*</span></label>
					<input type="text" name="email" required autocomplete="off"/>
				</div>

				<div>
					<label>Comentário:<span class="req">*</span></label>
					<textarea cols="60" rows="7" name="comentario" required autocomplete="off"></textarea>
				</div>

				<hr/>

				<div>
					<input class="Botoes" type="submit" value="Enviar" />
					<input class="Botoes" type="reset" value="Apagar" />
				</div>
			</form>
		</div>
	</body>
</html>