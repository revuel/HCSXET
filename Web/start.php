<!DOCTYPE html>
<html lang = "es">
	<head>
		<title> HCXET </title>
		
		<base href="../">
		 
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
			body { padding-top: 95px; }
		</style>
		
		<!-- JAVASCRIPT -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="JavaScript/bootstrap.js"></script>
	</head>
	
	<body>
		<!-- Cabecera -->
		<header>
			<?php include 'Include2/cabecera2.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<h3 class="text-center">Página principal de gestión</h3>
			<hr><br>
			<div class="container well text-center">
				<div class="row">
					<div class="col-xs-6 col-md-4 col-sm-4">
						<a href="Web/nuevotarget.php">
							<img class = "img-responsive center-block" src="Pics/nuevaencuesta.png" alt="Crear nueva encuesta" title = "Pulse para crear una nueva encuesta">
						</a>
						<a href ="Web/cursotarget.php">
							<img class = "img-responsive center-block" src="Pics/pendienteencuesta.png" alt="Comprobar estado encuesta" title = "Comprobar estado encuesta">
						</a>
					</div>
					<div class="col-xs-6 col-md-4 col-sm-4">
						<a href="Web/Listas/listas.php">
						<img class = "img-responsive center-block" src="Pics/mislistas.png" alt="Lista de direcciones" title = "Gestione sus listas de participantes"></a>
					</div>
					<div class="col-xs-6 col-md-4 col-sm-4">
						<img class = "img-responsive center-block" src="Pics/misresultados.png" alt="Resultados de mis encuestas" title = "Resultados de sus estudios">
					</div>
				</div>
			</div>
		</main>
		
		<!-- Pie de página-->
		<footer>
			<?php include '../Include/pie.php'; ?>
		</footer>
	</body>
</html>