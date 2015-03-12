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
			body { padding-top: 70px; }
		</style>
		
		<!-- JAVASCRIPT -->
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
						<a href="Web/nuevotarget.php"><img src="Pics/nuevaencuesta.png" alt="Crear nueva encuesta"></a>
						<img src="Pics/pendienteencuesta.png" alt="Crear nueva encuesta">
					</div>
					<div class="col-xs-6 col-md-4 col-sm-4">
						<a href="Web/Listas/lists.php"><img src="Pics/mislistas.png" alt="Lista de direcciones"></a>
					</div>
					<div class="col-xs-6 col-md-4 col-sm-4">
						<img src="Pics/misresultados.png" alt="Resultados de mis encuestas">
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