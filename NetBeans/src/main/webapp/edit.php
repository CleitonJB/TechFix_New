<?php
    header("Content-Type: text/html; charset=ISO-8859-1",true);
    require_once("functions.php");
    seguranca();
    $username = $_SESSION['user']['username'];
    $nome = $_SESSION['user']['nome'];
    $email = $_SESSION['user']['email'];
    
 ?>






<!DOCTYPE html>
<html>
    	<head>
		
	</head>

    <body>
      <!-- <?php include (".php") ?> -->
        
        <form action="editserver.php" method="post">

            Nome:<input type="text" name="nome" >
            Senha:<input type="text" name="senha" ><br>
            Email:<input type="text" name="email" ><br>
            Telefone:<input type="text" name="telefone" ><br>
            DDD:<input type="text" name="ddd" ><br>
            Estado:<input type="text" name="estado" ><br>
            Bairro:<input type="text" name="bairro" ><br>
            Cidade:<input type="text" name="cidade" ><br>

            <input type="submit" name="update" value="Update Data">

         </form>

    </body>


</html>