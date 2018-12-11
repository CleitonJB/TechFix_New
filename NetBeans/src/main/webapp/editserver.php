<?php

 

 if(isset($_POST['update']))
 {
     
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $databaseName = "Tech";
    
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
  
    $nome = $_POST['nome'];
    $username = $_POST['username'];
    $senha = $_POST['senha'];
    $fundador = $_POST['fundador'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cnpj = $_POST['cnpj'];   
    //$imagem = $_POST['imagem'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    
            
    
    $query = "UPDATE `usuario` SET `senha`='".$senha."',`nome`='".$nome."',`email`='".$email."',`telefone`='".$telefone."',`estado`='".$estado."',`bairro`='".$bairro."',`cidade`='".$cidade."',`fundador`='".$fundador."',`endereco`='".$endereco."',`bairro`='".$bairro."' WHERE `username`='".$username."'";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Updated';
    }else{
        echo 'Data Not Updated';
    }
    mysqli_close($connect);
 }

 ?> 
