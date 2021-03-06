<?php
//Eliminar cuando se integre en FrameWork o CMS
require_once('functions.php');
?>
<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Título del sitio - <?php echo TituloSecciones(); ?></title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="robots" content="index, follow">
	    <link rel="alternate" hreflang="es-mx" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(''); ?>apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(''); ?>favicon.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(''); ?>favicon.ico">
        <meta property="og:locale" content="es_MX">
		<meta property="og:type" content="website">
		<meta property="og:url" content="">
		<meta property="og:site_name" content="nombre del sitiio">
        <meta property="og:title" content="Perfil nombre">
	    <meta property="og:image" content="imagen">
	    <meta property="og:description" content="">
	    <meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@Perfil">
		<meta name="twitter:title" content="Perfil nombre">
		<meta name="twitter:description" content="">
		<meta name="twitter:image" content="imagen">

        <!-- StylesWith B o o t s t r a p -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/components/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/components/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/style-header.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/custom.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/style-footer.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/style-blog.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/style-blog-interna.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/style-contact.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/style-sumate.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/style-sumateinterna.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/style-agencia.css">





        <!-- Componentes -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/components/animate.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/components/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/components/hover-min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(''); ?>css/components/jquery.bxslider.css">

        <script src="<?php echo get_template_directory_uri(''); ?>js/vendor/modernizr-2.8.3.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
	    <div class="content-wrap">
			<div class="content">
		        <header>
			        <div class="container-fluid">
			        	<div class="row">
			        		<div class="navbar-brand">
						        <a href="inicio"><img class="icon" src="img/slider/gamol.png"></a>
			        		</div>
					        <ul class="navbar-right navegadorHeader">
				                <li class="listStyleNone">
				                	<a href="#" class="icons fa fa-phone hvr-bounce-in" id="cornerbox-phone"></a>
				                </li>
				                <li class="listStyleNone">
				                	<a href="#" class="icons fa fa-share-alt hvr-bounce-in" id="cornerbox-share-alt"></a>
				                </li>
				                <li class="listStyleNone">
				                	<a href="#" class="icons icon-idioma hvr-bounce-in">EN</a>
				                </li>
				                <li class="listStyleNone">
				                	<a href="#" class="icons botonHeadphone fa fa-headphones hvr-bounce-in hvr-back-pulse" id="cornerbox-headphones"></a>
				                </li>
				                <li class="listStyleNone">
				                	<a href="#" class="icons botonMenuBars fa fa-bars hvr-bounce-in hvr-back-pulse" id="open-button"></a>
				                </li>
				            </ul>
				        </div>
			        </div>
			    </header>
			    <!-- Menu slide Right-->
			    <div class="menu-bar-right">
					<nav>
						<div class="icon-list">
							<ul class="menubarList">
								<li class="listStyleNone">
									<a href="agencia" class="listMenuBar">Agencia
										<hr class="linea-menu">
									</a>
								</li>
								<li class="listStyleNone">
									<a href="#" class="listMenuBar">Servicios
										<hr class="linea-menu">
									</a>
								</li>
								<li class="listStyleNone">
									<a href="#" class="listMenuBar">Portafolio
										<span class="badge pull-right">2 Nuevos</span>
										<hr class="linea-menu">
									</a>
								</li>
								<li class="listStyleNone">
									<a href="sumate" class="listMenuBar">Súmate
										<span class="badge pull-right">10 Nuevos</span>
										<hr class="linea-menu">
									</a>
								</li>
								<li class="listStyleNone">
									<a href="contacto" class="listMenuBar">Contacto
										<hr class="linea-menu">
									</a>
								</li>
								<li class="listStyleNone">
									<a href="#" class="listMenuBar">Soporte técnico</a>
								</li>
							</ul>
						</div>
					</nav>
					<button class="btn fa fa-times-circle-o close-circle-slide hvr-bounce-out" id="close-button"></button>
				</div>
				<!-- 1 Menu desplegable Cornerbox Phone -->
				<div class="menu-wrap-cornerbox-phone">
					<nav class="menu-cornerbox-phone">
						<div class="icon-list-cornerbox-phone">
							<div>
								<div class="menu-phone">
									<h5>Mesa de ayuda</h5>
								</div>
								<hr class="linea-menu">
								<div class="text-menu-cornerbox">
									<p>+52 (55) 5262 9393 ext.000</p>
								</div>
							</div>
							<div>
								<div class="menu-phone">
									<h5>Ventas</h5>
								</div>
								<hr class="linea-menu">
								<div class="text-menu-cornerbox">
									<p>+52 (55) 5262 9393</p>
									<p>01800 823 0618</p>
								</div>
							</div>
							<div>
								<div class="menu-phone">
									<h5>Comutador</h5>
								</div>
								<hr class="linea-menu">
								<div class="text-menu-cornerbox">
									<p>+52 (55) 5262 9393</p>
									<p>01800 823 0618</p>
								</div>
							</div>
						</div>
					</nav>
					<button class="btn fa fa-times-circle-o close-cornerbox-phone hvr-bounce-out" id="close-button-cornerbox-phone"></button>
				</div>
				<!-- 2 Menu desplegable Cornerbox Headphones -->
				<div class="menu-wrap-cornerbox-headphones">
					<nav class="menu-cornerbox-headphones">
						<div class="icon-list-cornerbox-headphones">
							<h4>Soporte Técnico</h4>
							<div>
								<div class="menu-headphones">
									<h5>Télefono</h5>
								</div>
								<hr class="linea-menu">
								<div class="text-menu-cornerbox">
									<p> +52 (55) 5262 9393 ext.000</p>
								</div>
							</div>
							<div>
								<div class="menu-headphones">
									<h5>Chat</h5>
								</div>
								<hr class="linea-menu">
								<div class="text-menu-cornerbox">
									<a href="#">
										<p><i class="fa fa-comments"></i>&nbsp;Iniciar Chat</p>
									</a>
								</div>
							</div>
							<div>
								<div class="menu-headphones">
									<h5>Ticket</h5>
								</div>
								<hr class="linea-menu">
								<div class="text-menu-cornerbox">
									<a href="#">
										<p><i class="fa fa-ticket" aria-hidden="true"></i>&nbsp;Generar ticket</p>
									</a>
								</div>
							</div>
						</div>
					</nav>
					<button class="btn fa fa-times-circle-o close-cornerbox-headphones hvr-bounce-out" id="close-button-cornerbox-headphones"></button>
				</div>
				<!-- 3 Menu desplegable Cornerbox share alt -->
			    <div class="menu-wrap-cornerbox-share-alt">
					<nav class="menu-cornerbox-share-alt">
						<div class="icon-list-cornerbox-share-alt">
							<h4>Síguenos</h4>
							<div>
								<hr class="linea-menu">
								<ul class="marg-negat">
									<li class="listStyleNone">
										<a href="https://www.facebook.com/GamolWeb/" target="_blank"><span class="redes fa fa-facebook"></span></a>
									</li>
									<li class="listStyleNone">
										<a href="#" target="_blank"><span class="redes fa fa-github"></span></a>
									</li>
									<li class="listStyleNone">
										<a href="https://www.linkedin.com/company/gamol" target="_blank"><span class="redes fa fa-linkedin"></span></a>
									</li>
									<li class="listStyleNone">
										<a href="https://twitter.com/gamolweb" target="_blank"><span class="redes fa fa-twitter"></span></a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
					<button class="btn fa fa-times-circle-o close-cornerbox-share-alt hvr-bounce-out" id="close-button-cornerbox-share-alt"></button>
				</div>
			<main>