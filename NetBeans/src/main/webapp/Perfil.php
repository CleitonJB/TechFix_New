<?php
   header("Content-Type: text/html; charset=ISO-8859-1",true);
   require_once("functions.php");
   seguranca();
   $username = $_SESSION['user']['username'];
   $nome = $_SESSION['user']['nome'];
   $email = $_SESSION['user']['email'];

   //ISSO DEVE ESTAR NO INICIO DE CADA PÁGINA QUE O USUÁRIO USAR APÓS O LOGIN
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechFix - Perfil</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/os.css" rel="stylesheet">
    <link href="css/mini.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="css/flexslider.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">
	<link rel="shortcut icon" href="LogoMarca/Icone.png" type="image/x-icon">
  </head>
  <body id="top" style="margin-top: -40px;">
    <div class="tm-header" style="top: 40px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
            <img onclick="location='Index.html'" class="LogoMarca" src="LogoMarca/LogoMarca.png" title="Seja Bem-vindo(a) ao TechFix!">
          </div>
          <div class="col-lg-6 col-md-8 col-sm-9">
            <div class="mobile-menu-icon">
                  <i class="fa fa-bars"></i>
                </div>
            <nav class="tm-nav" style="width: 700px">
            <ul>
              <li><a href="Index.html" class="active">Menu</a></li>
      			  <li><a href="Sobre.html">Sobre</a></li>
      			  <li><a href="Empresas.html">Empresas</a></li>
      			  <li><a href="Login.php">Login</a></li>
      			  <li><a href="Cadastro.php">Cadastro</a></li>
            </ul>
          </nav>    
          </div>        
        </div>
      </div>      
    </div>
    </header>

    
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg');"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="images/usua.jpg" alt="Image"/></a></div>
          <div class="h2 title"><?php echo $nome ?></div><br>
          <p class="category text-white">Desenvolvedor web, Designer, Técnico em manutenção: Luiza</p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Contratos</a><a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Avaliações</a>
        </div>
      </div>
      <div class="section">
        <div class="container" style="position: relative; bottom: 20px;">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Siga-me no Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Siga-me no Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Siga-me no Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Siga-me no Instagram"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Sobre</div>
            <p>Olá! Eu sou Anthony Barnett. Desenvolvedor Web, Designer Gráfico e Técnico em manutenção.</p>
            <p>O CV criativo é um modelo de currículo HTML para profissionais. Construído com Bootstrap 4, agora UI Kit e FontAwesome, este modelo de design moderno e responsivo é perfeito para mostrar seu portfólio, habilidades e experiência. <a href="https://templateflip.com/templates/creative-cv/" target="_blank">Saber mais</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Informações Básicas</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Idade:</strong></div>
              <div class="col-sm-8">24</div>

            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">E-mail:</strong></div>
              <div class="col-sm-8">usuario@company.com</div>

            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Senha:</strong></div>
              <div class="col-sm-8">****** </div>
            
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Telefone:</strong></div>
              <div class="col-sm-8">+1718-111-0011</div>

            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Endereço:</strong></div>
              <div class="col-sm-8">Quissamã, Rio de Janeiro, Brasil </div>

            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Nascimento:</strong></div>
              <div class="col-sm-8">26/04/1998</div>
            </div>
            
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">CPF:</strong></div>
              <div class="col-sm-8">123456789-01 </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">RG:</strong></div>
              <div class="col-sm-8">123456789-01 </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Linguagens:</strong></div>
              <div class="col-sm-8">Português, English, German </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  
</div></div>
    </div>
    <footer class="tm-black-bg">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="container">
        <div class="row">
          <p style="position: relative; left: 370px;" class="tm-copyright-text">Copyright &copy; 2018 TechFix | Projetado por <a rel="nofollow" href="http://www.templatemo.com" target="_parent">Equipe TechFix!</a></p>
        </div>
      </div>  
    </footer>  
    <script src="js/core/jquery.3.2.1.min.js"></script>
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/now-ui-kit.js?v=1.1.0"></script>
    <script src="js/aos.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>
