<!-- https://inatitude.wordpress.com/2010/12/06/tutorial-php-sistema-de-comentarios/ -->

<!DOCTYPE html>
<html>
<head>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
<title>Sistema de comentário</title>
</head>
<body>
<h1>Digite seu comentário</h1>
<form method=”post” action=”validar.php”>
<div>Nome: </div>
<div><input type=”text” name=”nome” />
</div>
<div>Email: </div>
<div>
<input type=”text” name=”email” />
</div>
<div>Comentário: </div>
<div>
<textarea cols=”30″ rows=”5″ name=”comentario”></textarea>
</div>
<hr />
<div>
<input type=”submit” value=”Enviar” />
</div>
</form>

<?php

	require(‘conexao.php’);

	$tabela = mysql_query(“SELECT * FROM comentarios ORDER BY id DESC”);

	while($exibir = mysql_fetch_array($tabela)){
		echo $exibir[‘nome’] . “<br />”;
		echo $exibir[‘email’] . “<br />”;
		echo $exibir[‘comentario’] . “<hr />”;
	}

?>

</body>
</html>