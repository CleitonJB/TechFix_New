<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TechFix - Home</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link href="css/flexslider.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="LogoMarca/Icone.png" type="image/x-icon">
  </head>
  <body class="tm-gray-bg">
  	<!-- Header -->
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<img onclick="window.open('index.php', '_self');" class="LogoMarca" src="LogoMarca/LogoMarca.png" title="Seja Bem-vindo(a) ao TechFix!">
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav" style="width: 700px">
						<ul>
							<li><a href="index.php" class="active">Menu</a></li>
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
	
	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
		  	<li style="position: relative; left: 38px;">
			    <div class="tm-banner-inner">
					<h1 style="z-index: 2; text-shadow: 2px 4px 8px black;" class="tm-banner-title">Seja <span>Bem-vindo(a) ao</span></h1>
					<p style="z-index: 2; text-shadow: 2px 4px 8px black;" class="tm-banner-subtitle" style="color: #FCDD44">TechFix!</p>
					<a style="z-index: 2; text-shadow: 2px 4px 8px black;" href="Sobre.html" class="tm-banner-link">Ir para</a>	
				</div>
				<img src="img/boasvindas.png" alt="Image" />	
		    </li>
		    <li style="position: relative; left: 38px;">
			    <div class="tm-banner-inner">
					<h1 style="z-index: 2; text-shadow: 2px 4px 8px black;" class="tm-banner-title">Encontre <span>O MELHOR</span></h1>
					<p style="z-index: 2; text-shadow: 2px 4px 8px black;" class="tm-banner-subtitle" style="color: #FCDD44">ORÇAMENTO</p>
					<a style="z-index: 2; text-shadow: 2px 4px 8px black;" href="#more" class="tm-banner-link">Ir para</a>	
				</div>
				<img src="img/banner-1.jpg" alt="Image" />	
		    </li>
		    <li style="position: relative; left: 38px;">
			    <div class="tm-banner-inner">
					<h1 style="z-index: 2; text-shadow: 2px 4px 8px black;" class="tm-banner-title">Tire <span>suas</span></h1>
					<p style="z-index: 2; text-shadow: 2px 4px 8px black;" class="tm-banner-subtitle" style="color: #FCDD44">Dúvidas</p>
					<a style="z-index: 2; text-shadow: 2px 4px 8px black;" href="Forum.php" class="tm-banner-link">Ir para</a>	
				</div>
		      <img src="img/banner-2.jpg" alt="Image" />
		    </li>
		    <li style="position: relative; left: 38px;">
			    <div class="tm-banner-inner">
					<h1 style="z-index: 2; text-shadow: 2px 4px 8px black;" class="tm-banner-title">Participe <span>do</span></h1>
					<p style="z-index: 2; text-shadow: 2px 4px 8px black;" class="tm-banner-subtitle" style="color: #FCDD44">Forúm</p>
					<a style="z-index: 2; text-shadow: 2px 4px 8px black;" href="Forum.php" class="tm-banner-link">Ir para</a>	
				</div>
		      <img src="img/banner-3.jpg" alt="Image" />
		    </li>
		  </ul>
		</div>	
	</section>

	<!-- gray bg -->	
	<section style="position: relative; top: 90px;" class="container tm-home-section-1" id="more">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6" style="height: 100px;">
				<!-- Nav tabs -->
				<div class="tm-home-box-1">
					<ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
					    <li role="presentation" class="active">
					    	<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Pesquisar por Categoria</a>
					    </li>
					    <li role="presentation">
					    	<a href="#car" aria-controls="car" role="tab" data-toggle="tab">Pesquisar por empresas</a>
					    </li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
					    	<div class="tm-search-box effect2">
								<form action="#" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Selecione a Categoria -- </option>
							            	 	<option value="shangrila">Computadores</option>
												<option value="chatrium">Celulares</option>
												<option value="fourseasons">Notebook</option>
												<option value="hilton">Outros</option>
											</select> 
							          	</div>
							          	<div class="form-group">
							                <div>
							                    <input type='text' class="form-control" placeholder="Empresas" />
							                    <span>
							                        <span></span>
							                    </span>
							                </div>
							            </div>
							          		<div class="form-group margin-bottom-0">
							                	<select class="form-control">
							            	 	<option value="estado">--Estados-- </option>
												<option value="ac">Acre</option> 
												<option value="al">Alagoas</option> 
												<option value="am">Amazonas</option> 
												<option value="ap">Amapá</option> 
												<option value="ba">Bahia</option> 
												<option value="ce">Ceará</option> 
												<option value="df">Distrito Federal</option> 
												<option value="es">Espírito Santo</option> 
												<option value="go">Goiás</option> 
												<option value="ma">Maranhão</option> 
												<option value="mt">Mato Grosso</option> 
												<option value="ms">Mato Grosso do Sul</option> 
												<option value="mg">Minas Gerais</option> 
												<option value="pa">Pará</option> 
												<option value="pb">Paraíba</option> 
												<option value="pr">Paraná</option> 
												<option value="pe">Pernambuco</option> 
												<option value="pi">Piauí</option> 
												<option value="rj">Rio de Janeiro</option> 
												<option value="rn">Rio Grande do Norte</option> 
												<option value="ro">Rondônia</option> 
												<option value="rs">Rio Grande do Sul</option> 
												<option value="rr">Roraima</option> 
												<option value="sc">Santa Catarina</option> 
												<option value="se">Sergipe</option> 
												<option value="sp">São Paulo</option> 
												<option value="to">Tocantins</option> 
											</select> 
							            </div>
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" class="tm-yellow-btn">Procurar</button>
						            </div>  
								</form>
							</div>
					    </div>
					    <div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
							<div class="tm-search-box effect2">
								<form action="#" method="post" class="hotel-search-form">
									<div class="tm-form-inner">
										<div class="form-group">
							            	 <select class="form-control">		    
							 	 				<option value="">-- Selecione a Categoria -- </option>
							            	 	<option value="shangrila">Computadores</option>
												<option value="chatrium">Celulares</option>
												<option value="fourseasons">Notebook</option>
												<option value="hilton">Outros</option>
											</select> 
							          	</div>
							          	<div class="form-group">
							                <div class='input-group date-time' id='datetimepicker3'>
							                    <input type='text' class="form-control" placeholder="Pickup Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
							          	<div class="form-group">
							                <div class='input-group date-time' id='datetimepicker4'>
							                    <input type='text' class="form-control" placeholder="Return Date" />
							                    <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
							                </div>
							            </div>
							            <div class="form-group">
							            	 <select class="form-control">
							            	 	<option value="">-- Opções -- </option>
							            	 	<option value=""> Software </option>
												<option value=""> Hardware </option>
												<option value=""> Outros </option>
											</select> 
							          	</div>							           
									</div>							
						            <div class="form-group tm-yellow-gradient-bg text-center">
						            	<button type="submit" name="submit" class="tm-yellow-btn">Procurar</button>
						            </div>  
								</form>
							</div>
					    </div>				    
					</div>
				</div>								
			</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
					<img src="img/index-01.jpg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-green-gradient-bg tm-city-price-container">
							<span>REVISÃO</span>
							<span>R$ 60</span>
						</div>	
					</a>			
				</div>				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-right">
					<img src="img/index-02.jpg" alt="image" class="img-responsive">
					<a href="#">
						<div class="tm-red-gradient-bg tm-city-price-container">
							<span>SOFTWARE</span>
							<span>R$ 30</span>
						</div>	
					</a>					
				</div>				
			</div>
		</div>
	
		<div class="section-margin-top">
			<div class="row">				
				<div class="tm-section-header">
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">Disponibilidade de empresas</h2></div>
					<div class="col-lg-3 col-md-3 col-sm-3"><hr></div>	
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">						
						<img src="imgs/index-03.jpg" alt="image" class="img-responsive">
						<h3>Conversa técnica</h3>
						<p class="tm-date">inovação</p>
						<!-- em "inovação" estava a data -->
						<div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Ver</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">						
					    <img src="imgs/index-04.jpg" alt="image" class="img-responsive">
						<h3>Conexão informática</h3>
						<p class="tm-date">Concertos</p>
						<!-- em "concertos" estava a data -->
						<div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Ver</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2">						
					    <img src="imgs/index-05.jpg" alt="image" class="img-responsive">
						<h3>Ren informática</h3>
						<p class="tm-date">Versatilidade</p>
						<div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Ver</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-home-box-2 tm-home-box-2-right">						
					    <img src="imgs/index-06.jpg" alt="image" class="img-responsive">
						<h3>Ace autorizada</h3>
						<p class="tm-date">Visibilidade</p>
						<!-- em "visibilidade" estava a data -->
						<div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description">Ver</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="home-description">Somos um grupo desenvolvido para facilitar o seu aprimoramento e difusão de serviço online. Nós da TechFix esperamos que você se satisfaça com o nosso serviço e atendimento para que possamos continuar com a expansão de nossa empresa. Atenciosamente, equipe de gerenciamento TechFix.<a href="http://www.facebook.com/templatemo" target="_parent"> contact us </a>. O crédito vai para <a rel="DuplaINF" href="http://unsplash.com" target="_parent">Google Imagem</a> para imagens usadas neste modelo..</p>					
				</div>
			</div>			
		</div>
	</section>		
	
	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Reflexões de um TI</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>
				<div class="col-lg-6">
					<div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="imgs/index-07.jpg" alt="image" class="img-responsive">	
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description">“Se você não está disposto a arriscar, esteja disposto a uma vida comum” </p>
					        <div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Ver</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
						</div>						
					</div>					
			     </div>
			     <div class="col-lg-6">
			        <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="imgs/index-08.jpg"  alt="image" class="img-responsive">	
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description">“Escolha uma ideia. Faça dessa ideia a sua vida. Pense nela, sonhe com ela, viva pensando nela. Deixe cérebro, músculos, nervos, todas as partes do seu corpo serem preenchidas com essa ideia. Esse é o caminho para o sucesso” </p>
					        <div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Ver</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
						</div>						
					</div>
				</div>
				<div class="col-lg-6">
				    <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="imgs/index-09.jpg" alt="image" class="img-responsive">	
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description">“Acho que vírus de computador deve contar como vida. Creio que dizem algo sobre a natureza humana que a única forma de vida que criamos até agora é puramente destrutiva. Nós criamos vida à nossa própria imagem.”</p>
					        <div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Ver</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
						</div>						
					</div>
			    </div>
			    <div class="col-lg-6">
			        <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="imgs/index-10.jpg" alt="image" class="img-responsive">	
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description"> ... </p>
					        <div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Ver</span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
						</div>						
					</div>
			   	</div>
			</div>		
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2018 TechFix | Projetado por <a rel="nofollow" href="http://www.templatemo.com" target="_parent">Equipe TechFix!</a></p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="js/moment.js"></script>							<!-- moment.js -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<!--
	<script src="js/froogaloop.js"></script>
	<script src="js/jquery.fitvid.js"></script>
-->
   	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {

			$('#hotelCarTabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})

        	$('.date').datetimepicker({
            	format: 'MM/DD/YYYY'
            });
            $('.date-time').datetimepicker();

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
		  	$('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
		  	});
		});
		
		// Load Flexslider when everything is loaded.
		$(window).load(function() {	  		
			// Vimeo API nonsense

/*
			  var player = document.getElementById('player_1');
			  $f(player).addEvent('ready', ready);
			 
			  function addEvent(element, eventName, callback) {
			    if (element.addEventListener) {
			      element.addEventListener(eventName, callback, false)
			    } else {
			      element.attachEvent(eventName, callback, false);
			    }
			  }
			 
			  function ready(player_id) {
			    var froogaloop = $f(player_id);
			    froogaloop.addEvent('play', function(data) {
			      $('.flexslider').flexslider("pause");
			    });
			    froogaloop.addEvent('pause', function(data) {
			      $('.flexslider').flexslider("play");
			    });
			  }
*/

			 
			 
			  // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
/*

			  $(".flexslider")
			    .fitVids()
			    .flexslider({
			      animation: "slide",
			      useCSS: false,
			      animationLoop: false,
			      smoothHeight: true,
			      controlNav: false,
			      before: function(slider){
			        $f(player).api('pause');
			      }
			  });
*/


			  

//	For images only
		    $('.flexslider').flexslider({
			    controlNav: false
		    });


	  	});
	</script>
 </body>
 </html>