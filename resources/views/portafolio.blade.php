<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<head>
	<title>Portafolio</title>

	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Conceit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

				<div class="logo-w3layouts-agileits">
					<h1> <a class="navbar-brand" href="index.html"><i class="fa fa-clone" aria-hidden="true"></i> Municipalidad <span class="desc">Distrital de Chilca</span></a></h1>
				</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">	
						<ul class="nav navbar-nav navbar-right">
							<li><a class="request" href="enviarRequisitos">Enviar Requisitos</a></li>

						</ul>
						<ul class="nav navbar-nav">
							<li><a href="/">Inicio</a></li>
							<li><a href="nosotros">Nosotros</a></li>
							<li><a href="contacto">Contactos</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>
	</div>
  <!-- banner -->
  
  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>




	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Municipalidad Distrital de Huancayo</h3>
						<p>Estamos en usted en todo momento</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a href="/" class="two scroll ">Chilca</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Parque de los Héroes</h3>
						<p>Estamos en usted en todo momento</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a href="/" class="two scroll ">Chilca</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Parque Abel Martinez</h3>
						<p>Estamos en usted en todo momento</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a href="/" class="two scroll ">Chilca</a>
							</div>
							<div class="clearfix"> </div>
						</div>

					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">

						<h3>Cuartel 9 de Diciembre</h3>
						<p>Estamos en usted en todo momento</p>
						<div class="top-buttons">
							<div class="bnr-button">
								<a href="/" class="two scroll ">Chilca</a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!--/ab-->
	
	<!--//ab-->
	<!--/what-->
	<div class="works">
		<div class="container-mod">
			<div class="inner_sec_info_wthree_agile">
				<div class="ser-first">
					<div class="col-md-4 ser-first-grid text-center">
						<span class="fa fa-shield" aria-hidden="true"></span>
						<h3>Diseño Unico</h3>
						<p>El diseño de la pagina web fue  diseñado por Fredy estudiante de ls ISP</p>
					</div>
					<div class="col-md-4 ser-first-grid text-center">
						<span class="fa fa-pencil" aria-hidden="true"></span>
						<h3>Diferente posicion</h3>
						<p>Esta pagina tiene diferentes posicion de como se realizo y para el gusto de todos los usuarios</p>
					</div>
					<div class="col-md-4 ser-first-grid text-center">
						<span class="fa fa-thumbs-up" aria-hidden="true"></span>
						<h3>Experiencia de Usuarios</h3>
						<p>Usted es testigo que la pagina web no es una simple es desarrollado por alto nivel</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
	<!--//what-->
	<!--/banner_bottom-->
	<div class="banner_bottom">
		<div class="banner_bottom_in">
			<h3 class="tittle-w3ls we">Donde nosotros prevenimos y los servicios que ejercimos durante todo el tiempo</h3>

			<p>La Municipalidad del Distrio de Chilca se encuentra ubicado a media cuadra del parque de los Heroes exactamente entre la Avenida 9 de Diciembre y Ovalo de Coto Coto.</p>
			<img src="images/minu-Chilca.jpg" class="img-responsive" alt="">
		</div>
	</div>
	<!--//banner_bottom-->

	<!--/testimonials-->
	<div class="tesimonials">
		<div class="container">
			<h3 class="tittle-w3ls cen">Integrantes</h3>
			<div class="inner_sec">
				<div class="test_grid_sec">
					<div class="col-md-offset-2 col-md-8">
						<div class="carousel slide two" data-ride="carousel" id="quote-carousel">
							<!-- Bottom Carousel Indicators -->
							<ol class="carousel-indicators two">
								<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#quote-carousel" data-slide-to="1"></li>
								<li data-target="#quote-carousel" data-slide-to="2"></li>
							</ol>

							<!-- Carousel Slides / Quotes -->
							<div class="carousel-inner">

								<!-- Quote 1 -->
								<div class="item active">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/fredy.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-sm-9 test_img_info">
												<p>Diseñador y programador y jefe de una propia empresa</p>
												<h6>Fredy Max</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 2 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/raul.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-sm-9 test_img_info">
												<p>Jefe de seguridad informaticas (HAKEKEKITO)</p>
												<h6>Raúl Ezpinoza</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 3 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="images/rossel.jpg" class="img-responsive" alt="">
											</div>
											<div class="col-sm-9 test_img_info">
												<p>Analista y seguridad de datos en Banco de la Nación</p>
												<h6>Rossel Castillo</h6>
											</div>
										</div>
									</blockquote>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//testimonials-->

	<!-- /newsletter-->
	<div class="newsletter_w3ls_agileits">
		<div class="col-sm-6 newsleft">
			<h3>Crear Usuario </h3>
		</div>
		<div class="col-sm-6 newsright">
			<form action="#" method="post">
				<input type="email" placeholder="Ingrese su usuario" name="email" required="">
				<input type="submit" value="Enviar">
			</form>
		</div>

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->

	<!-- footer -->
	<div class="footer">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-9-mod footer-left">
				<h2><a href="index.html"><i class="fa fa-clone" aria-hidden="true"></i>Municipalidad</a></h2>
				<p>La Municipalidad del Distrio de Chilca se encuentra ubicado a media cuadra del parque de los Heroes exactamente entre la Avenida 9 de Diciembre y Ovalo de Coto Coto.</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div><br><br>
			<div class="col-md-9 footer-left" style="margin-left: 150px">
				<div class="sign-grds">
					<div class="col-md-9-mod sign-gd-two">
						<h4>Contact <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">

								<div class="address-right">
									<h6>Numero Telefonico</h6>
									<p>+999 912 234144</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Correo<a href="mailto:example@email.com"> grupoTrabajo@gmail.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								
								<div class="address-right">
									<h6>Localidad</h6>
									<p>Distrio de Chilca - Huancayo

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			<p class="copy-right">&copy 2018. Todos los derechos estan reservados | Diseñado por <a href="http://w3layouts.com/">Diseñadores DSI</a></p>
		</div>
	</div>
	</div>
	<!-- //footer -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>

</html>



      

    