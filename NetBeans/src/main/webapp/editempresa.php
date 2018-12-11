<?php
    header("Content-Type: text/html; charset=ISO-8859-1",true);
    require_once("functionsemp.php");
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

        
        <form action="editserverempresa.php" method="post">

            Nome da Empresa:<input type="text" name="nome" ><br>
            Senha:<input type="text" name="senha" ><br>
            Fundador:<input type="text" name="fundador" ><br>
            Email:<input type="text" name="email" ><br>
            CNPJ:<input type="text" name="cnpj" ><br>
            Endereço:<input type="text" name="endereco" ><br>
            Estado:<input type="text" name="estado" ><br>
            Cidade:<input type="text" name="cidade" ><br>
            Bairro:<input type="text" name="bairro" ><br>
            Telefone:<input type="text" name="telefone" ><br>
            
 <tr>
     <td>
      <label >Users</label>
     </td>
     <td align="left">
      <select name="username"> 
      <option><?php echo $username?></option>  
     </select>
     </td>
    </tr>

            <input type="submit" name="update" value="Update Data">

         </form>

    </body>


</html>