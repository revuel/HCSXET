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
			<h3 class="text-center">Comprobar resultados de un estudio</h3>
			<hr><br>
			<div class="container  text-center">
				<div class="row">
					
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Regla de entrada 1</p>
					</div>
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Regla de entrada 2</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Regla de salida</p>
					</div>
					<div class="col-xs-6 col-md-6 col-sm-4 well">
						<p>Resultado</p>
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