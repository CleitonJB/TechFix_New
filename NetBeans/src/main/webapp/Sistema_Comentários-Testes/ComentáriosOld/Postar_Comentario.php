<!-- https://www.oficinadanet.com.br/artigo/php/sistema_de_comentarios_php_-_mysql -->

<?php 

	mysql_connect("localhost", "root", "root")
	mysql_select_db("Tech");

	$nome=$_POST['nome'];
	$data = date("Y/m/d");           
	$comentario=$_POST['comentario'];

	$insert = mysql_query("INSERT INTO Tech(nome,data,comentario) 
values('$nome','$data','$comentario')");

	$sql = "SELECT * FROM Tech ORDER BY id desc";
	$executar = mysql_query($sql);

	while( $exibir = mysql_fetch_array($executar)){
		echo $exibir['data'];
		echo "</br>";
		echo $exibir['nome'];
		echo "</br>";
		echo $exibir['comentario'];
		echo "</br><hr>";
	}

?>