<?php 

	mysql_connect("localhost", "root", "root")
	mysql_select_db("Tech");

	$name = $_POST["nome"];
	$comentario = $_POST["comentario"];

	$comment_lenght = strlen($comment);

	if ($comment_lenght > 100) {
		header("location: Index.html?error=1");
	}
	else{
		mysql_query("INSERT INTO comments VALUES('', '$name', '$comentario')");
		header("location: Index.html");
	}

?>