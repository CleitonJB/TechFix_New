<?php

 

 if(isset($_POST['update']))
 {
     
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $databaseName = "Tech";
    
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
  
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $fundador = $_POST['fundador'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidadeemp'];
    $bairro = $_POST['bairro'];
    $username = $_POST['username'];
    
            
    
    $query = "UPDATE `empresa` SET `nome`='".$nome."',`cnpj`='".$cnpj."',`email`='".$email."',`endereco`='".$endereco."',`estado`='".$estado."',`telefone`='".$telefone."',`bairro`='".$bairro."',`cidadeemp`='".$cidade."',`fundador`='".$fundador."' WHERE `username`='".$username."'";
    
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
