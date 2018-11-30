<?php
  header("Content-Type: text/html; charset=ISO-8859-1",true);
  require_once("functions.php");
  seguranca();
  require_once("config.php");

  function checkValues($descricao){
    if ($descricao != null){
      return true;
    }
  }

  function  comentar ($descricao, $cod_publicacao, $email){
    $config = new Config();
    $conexao = $config->conectaBanco();

    $query = "INSERT INTO comenta (descricao, cod_publicacao, email, cod_comentario) VALUES ('".$descricao."', '".$cod_publicacao."', '".$email."', NULL)";

    echo $query;

    $result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

    if($result != null) {
      header("Location: publicacao.php?id=".$_SESSION['cod_publicacao']);

    } else {
      $message = '<h1> Houve um erro ao salvar o comentario </h1>
            <h3> Por favor, <a href="publicacao.php">tente novamente </a></h3>';
      echo $message;
    }
  }


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      if (checkValues ($_POST['comentario'])){
          session_start (); //pega informaçoes que ja estao no BD
          $email = $_SESSION['user']['email'];
          $cod_publicacao = $_SESSION['cod_publicacao'];
          $descricao = $_POST['comentario'];
          comentar($descricao, $cod_publicacao, $email);
        } else {
          $message = '<h1>Por favor, preencha os campos corretamente.</h1><h3> <a href="publicacao.php">Tente Novamente</a></h3>';
          echo $message;
        }

      }
?>
