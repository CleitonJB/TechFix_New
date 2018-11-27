<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>TechFix - Login</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="LogoMarca/Icone.png" type="image/x-icon">
  
</head>

<body>
  <div class="tm-header" style="padding-top: 0px;bottom: 0px;top: 0px;border-bottom-width: 10px;padding-bottom: 80px;height: 85px;margin-top: 0px;">
    <div class="container" style="margin-left: 110px;">
        <div class="row">
    <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
            <img style="position: relative; bottom: 15px;" onclick="location='Index.html'" class="LogoMarca" src="LogoMarca/LogoMarca.png" title="Seja Bem-vindo(a) ao TechFix!"> 
          </div>
          <div class="col-lg-6 col-md-8 col-sm-9">
            <div class="mobile-menu-icon">
                  <i class="fa fa-bars"></i>
                </div>
            <nav class="tm-nav" style="width: 700px ;margin-left:500px; position: absolute; top:0px;">
            <ul style="margin-top: 6px;">
            	<li><a href="Index.html" class="active">Menu</a></li>
      				<li><a href="Sobre.html">Sobre</a></li>
      				<li><a href="Empresas.html">Empresas</a></li>
      				<li><a href="Cadastro.php">Cadastro</a></li>
            </ul>
          </nav>    
          </div>        
        </div>
      </div>
    </div>

  <div class="form" style="margin-top: 100px">
      
     
        
        <div id="login">   
          <h1>Login</h1>
          
          <form action="logs.php" method="post">
          
            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="text" name="user" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Senha<span class="req">*</span>
            </label>
            <input type="password" name="senha" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Esqueceu a Senha?</a></p>
          
          <button type="submit" name="submit" class="button button-block"/>Login</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>


</div>



</body>

</html>





 
