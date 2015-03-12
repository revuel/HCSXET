<!DOCTYPE html>
<html lang = "es">
	<head>
		<title> HCXET </title>
		 
		<!-- METADATOS -->
		<meta charset="utf-8">
		<meta name="author" content="Olga Peñalba Rodríguez, Miguel Revuelta Espinosa">
		<meta name="description" content="Human Centered Systems Experimental Evaluation Tool">
		<meta name="keywords" content="HCS, HCC, HCD, Human Centered Systems, Sistemas Centrados en la Persona">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS -->
		<link rel="stylesheet" href="CSS/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="CSS/bootstrap.css" type="text/css" media="screen">
		<link rel="stylesheet" href="CSS/bootstrap-theme.css" type="text/css" media="screen">
		
		<style>
			body { padding-top: 70px; }
		</style>
		
		<!-- JAVASCRIPT -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="JavaScript/bootstrap.js"></script>
	</head>
	
	<body>
		<!-- Cabecera -->
		<header>
			<?php include 'Include/cabecera1.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<h3 class="text-center">Human Centeredness eXperimental Evaluation Tool</h3>
			<hr>
			<div class="container well">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-8 col-md-offset-2">
						<h2 class="text-center">Introducción</h2>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-8 col-md-offset-2">
						<p class="text-center lead">Herramienta experimental para la comprobación del grado
						de cumplimiento	de una selección de principios de la Computación Centrada en 
						la Persona por parte de sistemas informáticos mediante la realización de una
						encuesta on-line.</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-xs-6 col-md-4 col-sm-4">
						<h4 class="text-center">HCS/HCC/HCD</h4>
						<p class="text-center">Los Sistemas Centrados en la Persona, 
						la Computación Centrada en la Persona y el Diseño Centrado 
						en la Persona estudian la actividad cognitiva del ser humano
						en entornos socio-técnicos aprehendiendo las necesidades y motivaciones
						de éste para poder contribuir a la realización del mismo facilitándole
						alcanzar los objetivos que la persona persiga.<p>
					</div>
				  <div class="col-xs-6 col-md-4 col-sm-4">
						<h4 class="text-center">Darme de Alta</h4>
						<p class="text-center">Para poder realizar la encuesta y comprobar cómo
						de centrado en la persona es un sistema, es necesario registrarse en el sitio.<p>
						<a href="Register/alta.php"><p class="text-center">Registrarse</p></a>
						<p class="text-center">¿Está ya registrado?<p>
						<a href="Login/conectar.php"><p class="text-center">Conectarse</p></a>
					</div>
				  <div class="col-xs-6 col-md-4 col-sm-4">
						<h4 class="text-center">Orígenes</h4>
						<p class="text-center">Existe un cierto consenso en atribuir oficialmente el nacimiento 
						de los Sistemas Centrados en la Persona a la fecha de febrero de 1997, en una presentación
						de la División de Información de la NSF (National Science Foundation), protagonizada por
						Rob Kling y Susan Leigh Star.<p>
					</div>
				</div>
			</div>
		</main>
		<div class = "container">
			<hr>
			<div class="row">
				<div class="col-xs-6 col-md-6 col-sm-6 text-center well">
					<h2 class="text-center">Principios</h2>
					<?php include 'Include/slider1.php'; ?>
				</div>
				<div class="clearfix visible-xs"></div>
				<div class="col-xs-6 col-md-6 col-sm-6 text-center well">
					<h2>Cuestiones</h2>
					<img src="Pics/moldepreguntas.png" alt="Custiones de la Encuesta">
				</div>
			</div>
		</div>
		<div class = "container">
			<hr>
			<div class = "col-xs-12 col-md-12 col-sm-12 text-center">
				<h2>¿Cómo funciona la herramienta?</h2>
				<img src="Pics/explicaciondelaherramienta.png" alt="Explicación de la HCXET">
			</div>
		</div>
		
		<!-- Pie de página-->
		<footer>
			<?php include 'Include/pie.php'; ?>
		</footer>
	</body>
</html>