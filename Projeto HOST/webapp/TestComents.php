<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Comentários</TITLE>
</HEAD>
<BODY>
<h2>Comentários Enviados pelos Usuários</h3>
<?php
$link=mysql_connect("localhost",'root','');
$banco=mysql_select_db("bdcomentarios");
?>

<form name="form" method="post" action="#">
    Nome:
    <input type=text name=nome>
    <br><br>E-Mail:
    <input type=text name=email>
    <br><br>Mensagem:<br>
    <textarea name=comentario></textarea>
    <br><br>
    <input type=submit value=Enviar>
    <input type=reset value=Limpar>
</form>
<hr>

<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$data = date("Y/m/d");           
$comentario=$_POST['comentario']; 
if(strlen($_POST['nome'])) #insere somente se no form foi escrito o nome
{
    $insert = mysql_query("INSERT INTO tbcomentarios(nome,email,data,comentario) 
    values('$nome','$email','$data','$comentario')");
}
$sql = "SELECT * FROM tbcomentarios ORDER BY id desc";
$executar=mysql_query($sql);
while( $exibir = mysql_fetch_array($executar)){
    echo $exibir['data'];
    echo "</br>";
    echo $exibir['nome'];
    echo "</br>";
    echo $exibir['email'];
    echo "</br>";
    echo $exibir['comentario'];
    echo "</br><hr>";
}
?>

<!-- https://www.oficinadanet.com.br/artigo/php/sistema_de_comentarios_php_-_mysql -->
</BODY>
</HTML>

