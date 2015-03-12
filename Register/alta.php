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
			<?php include '../Include/cabecera1.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<div class="container well">
				<h2 class = "text-center">Formulario de registro</h2>
				<p class = "text-center">Para poder enviar la encuesta y 
				así poder tener una noción del grado de cumplimiento de los principios 
				de la Computación Centrada en la Persona que un sistema ofrece, es necesario disponer
				de una cuenta en este sitio web.</p>
				<hr>
			</div>
			<div class = "container">
				<h4>Introduzca sus datos</h2>
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Correo electrónico:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Le enviaremos un correo de confirmación" required>
						</div>
					</div>
						<div class="form-group">
						<label class="control-label col-sm-2" for="pwd">Contraseña</label>
						<div class="col-sm-10">          
							<input type="password" class="form-control" id="pwd" placeholder="Introduzca su contraseña" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="name">Nombre:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" placeholder="Campo opcional">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="surname">Apellidos:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="surname" placeholder="Campo opcional">
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Listo</button>
						</div>
					</div>
				</form>
			</div>
		</main>
		
		
		<!-- Pie de página-->
		<footer>
			<?php include '../Include/pie.php'; ?>
		</footer>
	</body>
</html>