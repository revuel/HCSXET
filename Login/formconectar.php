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
			
			.vertical-center {
			  min-height: 100%;  
			  min-height: 100vh;

			  display: flex;
			  align-items: center;
			}
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
			<div class = "row">
				<form class="form-signin vertical-center" role="form" action= "Login/accion-conectar.php" method = "post">
					<div class = "col-xs-12 col-sm-6 col-md-offset-3">
						<label class="control-label" for="email">Correo electrónico</label>
						<input type="email" class="form-control" id="email" placeholder="Introduzca su dirección de correo" name="user" required>
						<br>	
						<label class="control-label" for="pwd">Contraseña</label>       
						<input type="password" class="form-control" id="estudio" placeholder="Introduzca su contraseña de acceso a este sitio" name = "pass" required>
						<br>	
						<button class="btn btn-lg btn-primary btn-block" type="submit">Conectar</button>
					</div>
				</form>
			</div>
		</main>
		<!-- Pie de página-->
		<footer>
		</footer>
	</body>
</html>