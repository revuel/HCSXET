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
	</head>
	
	<body>
		<!-- Cabecera -->
		<header>
			<?php include '../Include/cabecera1.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<div class="container">
				<h2 class = "text-center">Formulario de registro</h2>
				<p class = "text-center">Para poder enviar la encuesta y 
				así poder tener una noción del grado de cumplimiento de los principios 
				de la Computación Centrada en la Persona que un sistema ofrece, es necesario disponer
				de una cuenta en este sitio web.</p>
				<div class = "row well">
					<form class="form-signin" role="form">
						<div class = "col-xs-12 col-sm-6 col-md-offset-3">
							<label class="control-label" for="email">Correo electrónico</label>
							<input type="email" class="form-control" id="email" placeholder="Introduzca su dirección de correo" required>
							<br>	
							<label class="control-label" for="pwd">Contraseña</label>       
							<input type="password" class="form-control" id="estudio" placeholder="Determine su contraseña de acceso" required>
							<br>	
							<label class="control-label" for="pwd">Nombre</label>       
							<input type="text" class="form-control" id="codigo" placeholder="Introduzca su nombre (opcional)">
							<br>
							<label class="control-label" for="pwd">Apellidos</label>       
							<input type="text" class="form-control" id="codigo" placeholder="Introduzca sus apellidos (opcional)">
							<br>
							<button class="btn btn-lg btn-primary btn-block" type="submit">Registrarme</button>
						</div>
						
					</form>
				</div>
			</div>

		</main>
		
		
		<!-- Pie de página-->
		<footer>
			<?php include '../Include/pie.php'; ?>
		</footer>
	</body>
</html>