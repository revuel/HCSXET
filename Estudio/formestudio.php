<!DOCTYPE html>
<html lang = "es">
	<head>
		<!-- ---------------------------------------------------------------------------
		
		Proyecto: Human Centeredness experimental evaluation tool
		Autores: Olga Peñalba, Miguel Revuelta
		Fecha: 2015-09-1
		Versión: 2.0 (español)

		---------------------------------------------------------------------------- -->
		
		<title> HCXET | Participa </title>
		
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
	</head>
	
	<body>
		<!-- Cabecera -->
		<header class="pushdown">
			<?php include '../Include/cabecera1.php'; ?>
		</header>
		<br>
		<!-- Contenido principal -->
		<main>
			<div class = "container">
				<div class = "row well">
					<form class="form-signin" role="form" action = "Estudio/accesoestudio.php" method = "post">
						<h2 class="form-signin-heading text-center">Participar en un estudio</h2>
						<hr>
						<div class = "col-xs-12 col-sm-6 col-md-offset-3">
							<label class="control-label" for="email" >Correo electrónico</label>
							<input type="email" class="form-control" id="email" placeholder="Introduzca su dirección de correo"  name="id_destinatario"required>
							<br>	
							<label class="control-label" for="pwd" >Nombre del estudio</label>       
							<input type="text" class="form-control" id="estudio" placeholder="Introduzca el nombre del estudio al que fue invitado" name="id_target" required>
							<br>	
							<label class="control-label" for="pwd" >Código de acceso personal al estudio</label>       
							<input type="password" class="form-control" id="codigo" placeholder="Introduzca el código que le ha sido facilitado" name="token" required>
							<br>
							<button class="btn btn-lg btn-primary btn-block" type="submit">Ir</button>
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