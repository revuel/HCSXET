<?php

	/* -----------------------------------------------------------------------------
		
		Proyecto: Human Centeredness experimental evaluation tool
		Autores: Olga Peñalba, Miguel Revuelta
		Fecha: 2015-09-1
		Versión: 2.0 (español)
		
	----------------------------------------------------------------------------- */
	
	/* 
		Esta es la página de alta a un nuevo usuario. Si existe sesión iniciada, se
		desvía del formulario de registro a la página principal de gestión
	*/
	
	//creamos la sesion
	session_start();

	// Si hay sesión iniciada, nos trasladamos a la página de gestión
	if(isset($_SESSION['id'])) {
	  header("Location: http://localhost/HCXET/Web/start.php");
	  exit();
	}
?>

<!DOCTYPE html>
<html lang = "es">
	<head>
		<!-- ---------------------------------------------------------------------------
		
		Proyecto: Human Centeredness experimental evaluation tool
		Autores: Olga Peñalba, Miguel Revuelta
		Fecha: 2015-09-1
		Versión: 2.0 (español)

		---------------------------------------------------------------------------- -->
		<title> HCXET | Registro </title>
		
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
		<link rel="stylesheet" href="CSS/hcxet.css" type="text/css" media="screen">
		
		<!-- JAVASCRIPT -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="JavaScript/bootstrap.js"></script>
		<script>
			$(document).ready(function() { 
			
				 // refresh captcha
				 $('img#refresh').click(function() {  
						
						change_captcha();
				 });
				 
				 function change_captcha()
				 {
					document.getElementById('captcha').src="Captcha/get_captcha.php?rnd=" + Math.random();
				 }
			});
		</script>
	</head>
	
	<body>
		<!-- Cabecera -->
		<header class="pushdown">
			<?php include '../Include/cabecera1.php'; ?>
		</header>
		
		<!-- Contenido principal -->
		<main>
			<div class="container">
				<div class = "row well">
					<h2 class = "text-center">Formulario de registro</h2>
					<p class = "text-center">Regístrate para poder evaluar el grado de cumplimiento de los principios de
					la Computación Centrada en la Persona enviando encuestas a los invitados que desee.</p>
					<hr>
					<form class="form-signin" role="form" action="Register/alta-action.php" method="post">
						<div class = "col-xs-12 col-sm-6 col-md-offset-3">
							<label class="control-label" for="email">Correo electrónico</label>
							<input type="email" class="form-control" name="email" placeholder="Introduzca su dirección de correo" required>
							<br>	
							<label class="control-label" for="pwd">Contraseña</label>       
							<input type="password" class="form-control" name="pwd" placeholder="Determine su contraseña de acceso" required>
							<br>	
							<label class="control-label" for="name">Nombre</label>       
							<input type="text" class="form-control" name="name" placeholder="Introduzca su nombre (opcional)">
							<br>
							<label class="control-label" for="surname">Apellidos</label>       
							<input type="text" class="form-control" name="surname" placeholder="Introduzca sus apellidos (opcional)">
							<br>
							<div id="wrap" align="center">
								<img src="Captcha/get_captcha.php" alt="No load" id="captcha" title="Captcha image"/>
								<img src="Captcha/refresh.jpg" width="25" alt="" id="refresh" title="Regenerar"/>
								<br>
								<input type="text" class="form-control" name="code" id="code" placeholder="Introduzca el código de la imagen superior" required>
							</div>
							<br>
							<button class="btn btn-lg btn-primary btn-block" type="submit" id="Send">Registrarme</button>
						</div>
						
					</form>
				</div>
			</div>
		</main>
	
		<!-- Pie de página-->
		<footer>
			<?php include '../Include/adorno.php'; ?>
		</footer>
	</body>
</html>