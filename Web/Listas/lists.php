<!DOCTYPE html>
<html lang = "es">
	<head>
		<title> HCXET </title>
		
		<base href="../../">
		 
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
			<?php include '../Include2/cabecera2.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<h3 class="text-center">Página principal de gestión</h3>
			<hr><br>
			<div class = "container">
				<div class="container row">
					<div class="col-xs-6 col-md-4 well">
						<h4 class = "text-center">Acciones</h4>
						<ul class="nav nav-sidebar">
							<li class ="active">
								<a href = "">Ver listas</a>
							</li>
							<li>
								<a href = "">Crear lista</a>
							</li>
							<li>
								<a href = "">Modificar lista</a>
							</li>
							<li>
								<a href = "">Borrar lista</a>
							</li>
							<br>
							<li>
								<a href = "">Ver todos participantes</a>
							</li>
							<li>
								<a href = "">Añadir participante a lista</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-8 well">
						<h4 class = "text-center">Resultado de la acción</h4>
					</div>
				</div>
			</div>
		</main>
		
		<!-- Pie de página-->
		<footer>
			<?php include '../../Include/pie.php'; ?>
		</footer>
	</body>
</html>