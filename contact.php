<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Repara tu celular o computadora por el mejor precio disponible garantizado.">
	<meta name="author" content="codingimages.com">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="favicon.ico">
	<title>Cell4LessRepairs - Contact</title>
	<!-- Bootstrap core CSS -->
	<link href="css/plugins/bootstrap.min.css" rel="stylesheet">
	<link href="css/plugins/bootstrap-submenu.css" rel="stylesheet">
	<link href="css/plugins/animate.min.css" rel="stylesheet">
	<link href="css/plugins/slick.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Icon Font-->
	<link href="iconfont/style.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Chivo:400,400i,900,900i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- Google map -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	<style>

    .contact-form {
      border-radius: 5px;
			padding: 15px;
    }
  </style>
</head>

<body>
	<!-- Loader -->
	
	<!-- //Loader -->
	<!-- Header -->
	<header class="page-header sticky">
		<!-- Fixed navbar -->
		<nav class="navbar" id="slide-nav">
			<div class="container">
				<div class="navbar-header">
					<div class="header-info-mobile">
						<div class="header-info-mobile-inside">
							<p><i class="icon icon-placeholder-for-map"></i>7411 Riggs Rd Suite #212 Hyattsville MD 20783</p>
							<p><i class="icon icon-phone-receiver"></i>301-238-5954 / 301-238-5964</p>
							<p><i class="icon icon-mail-black"></i><a href="mailto:ccellforless@gmail.com">ccellforless@gmail.com</a></p>
							<p><i class="icon icon-clock"></i>Lun-Vie: 10:00 am - 6:00 pm, Sat: 10:00 am - 5:00 pm</p>
						</div>
					</div>
					<div class="header-info-toggle"><i class="icon-angle-down js-info-toggle"></i></div>
					<div class="header-top">
						<div class="logo">
							<a href="index.php">
								<span class="hidden-xs hidden-sm"><img src="images/Cell4LessWireless-Logo.png" alt="Logo"></span>
								<span class="visible-xs visible-sm"><img src="images/Cell4LessWireless-Logo.png" alt="Logo"></span>
							</a>
						</div>
						<div class="header-top-info">
							<i class="icon icon-placeholder-for-map"></i>7411 Riggs Rd Suite #212
							<br>Hyattsville, MD, 20783
						</div>
						<div class="header-top-info">
							<i class="icon icon-clock"></i>Lun-Vie: 10:00 am - 6:00 pm
							<br>Sab: 10:00 am - 5:00 pm
						</div>
						<div class="phone">
							<div class="phone-wrapper">
								<div class="above-number">¿Necesita asistencia tecnica?</div>
								<div class="number">301-238-5954 / 301-238-5964</div>
								<div class="under-number"><a href="#">ccellforless@gmail.com</a></div>
							</div>
						</div>
						<button type="button" class="navbar-toggle js-navbar-toggle"><i class="icon icon-interface icon-menu"></i><i class="icon icon-cancel"></i></button>
					</div>
				</div>
				<div id="slidemenu" data-hover="dropdown" data-animations="fadeIn">
					<a href="#" class="slidemenu-close js-navbar-toggle"><i class="icon icon-cancel"></i>CLOSE MENU</a>
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="shadow-effect">Inicio</a></li>
						<li><a href="about.html" class="shadow-effect">Nosotros</a></li>
						<li><a href="services.html" class="shadow-effect">Servicios<span class="ecaret"></span></a>
						</li>
						<li><a href="shop.html" class="shadow-effect">Compra</a> </li>
						<li class="active"><a href="contact.html" class="shadow-effect">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- // Header -->
	<!-- Content  -->
	<div id="page-content">
		<!-- Breadcrumbs Block -->
		<div class="block">
			<div class="container">
				<div class="breadcrumbs">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>Contacts</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- //Breadcrumbs Block -->
		<!-- Block -->
		<div class="block">
			<div class="container">
				<h1 class="h-lg text-center">Forma de <span class="color">Contacto</span></h1>
				<div class="row row-lined">
				</div>
				<div class="row">
					<div class="col-sm-3">
						<img src="images/contact-img.jpg" class="img-responsive" alt="">
						<div class="divider-lg"></div>
						<h6>Preguntas? <br> Escríbenos </h6>
						
					</div>
					<div class="divider-lg visible-xs"></div>
					<div class="container">
						<div class="row">
							<div class="col col-sm-12 col-md-6">
								<div class="contact-form bg-primary text-light mt-5 px-4 py-5">
									<h3 class="text-center mb-3">Forma de contacto</h3>
									<div class="text-center">
										<?php
															
															if(isset($_SESSION['msg'])){
																	echo $_SESSION['msg'];
																	unset($_SESSION['msg']);
															} else if(isset($_SESSION['msgFields'])){
																	echo $_SESSION['msgFields'];
																	unset($_SESSION['msgFields']);
															}
															
															?>
									</div>
									<div class="row">
									<form class ="col col-sm-12 col-md-12" action="SendGrid-API/f_process.php" method="post">
										<div class="row">
											<div class="form-group col-md-12"> 
												<label for="Name">Nombre
													<span>*</span>
												</label>
												<input type="text" name="name" class="form-control bg-dark text-white">
											</div>
											<div class="form-group col-md-12">
												<label for="Phone">Teléfono
													<span>*</span>
												</label>
												<input type="text" name="phone" class="form-control bg-dark text-white">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-12">
												<label for="Email">Correo Electrónico
													<span>*</span>
												</label>
												<input type="text" name="email" class="form-control bg-dark text-white">
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-12">
												<label for="Name">Mensaje
													<span>*</span>
												</label>
												<textarea name="message" id="" cols="30" rows="5" class="form-control bg-dark text-white"></textarea>
											</div>
										</div>
										<button type="submit" class="btn btn-dark">Enviar Mensaje</button>
									</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //Block -->
	</div>
	<!-- // Content  -->
	<!-- Footer -->
	<div class="page-footer">
		<div class="footer-content">
			<div class="back-to-top"><a href="#top"><span class="icon icon-mouse-scroll"></span></a></div>
			<div class="container">
				<ul class="footer-menu">
					<li><a href="services.html">Computadoras </a></li>
					<li><a href="services.html">Celulares</a></li>
					<li><a href="services.html">Liberación de IMEI</a></li>
					<li><a href="services.html">Desbloqueo de celulares</a></li>
					<li><a href="services.html">Instalación de programas</a></li>
					<li><a href="services.html">Remoción de virus</a></li>
				</ul>
				
				<div class="footer-phone">
					<i class="icon icon-phone-receiver"></i>Llama nuestras oficinas <span class="number">301-238-5954 / 301-238-5964</span>
				</div>
				<div class="row footer-columns">
					<div class="col-lg-2 visible-lg"></div>
					<div class="col-sm-4 col-lg-3">
						<div class="contact-info"><i class="icon icon-placeholder-for-map"></i>7411 Riggs Rd,
							<br> Hyattsville, MD, 20783</div>
					</div>
					<div class="col-sm-4 col-lg-3">
						<div class="contact-info"><i class="icon icon-clock"></i>Lun-Vie: 9:00am-6:00pm
							<br> Sab: 10:00am-5:00pm</div>
					</div>
					<div class="col-lg-2 visible-lg"></div>
					<div class="col-sm-4 col-lg-3">
						<div class="contact-info"><i class="icon icon-mail-black"></i><a href="mailto:ccellforless@gmail.com">ccellforless@gmail.com</a></div>
					</div>
					<div class="col-sm-4 col-lg-3">
						<div class="contact-info"><i class="icon icon-facebook"></i><a href="facebook.com">Facebook</a></div>
					</div>
				</div>
				<div class="copyright">© 2017 Cell4LessWireless. <span>Todos los derechos reservados.</span></div>
			</div>
		</div>
	</div>
	<!-- //Footer -->

		<!-- External JavaScripts -->
		<script src="js/jquery.js"></script>
		<script src="js/plugins/bootstrap.min.js"></script>
		<script src="js/plugins/slick.min.js"></script>
		<script src="js/plugins/jquery.waypoints.min.js"></script>
		<script src="js/plugins/jquery.form.js"></script>
		<script src="js/plugins/jquery.validate.min.js"></script>

		<!-- Custom JavaScripts -->
		<script src="js/custom.js"></script>

</body>

</html>
